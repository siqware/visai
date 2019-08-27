// Setup module
// ------------------------------
var table;
var CreateComponent = function() {
    //
    // Setup module components
    //

    // Basic Datatable examples
    var _componentDatatable = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [ 5 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });
        // Alternative pagination
        $('.datatable-pagination').DataTable({
            pagingType: "simple",
            language: {
                paginate: {'next': $('html').attr('dir') == 'rtl' ? 'Next &larr;' : 'Next &rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr; Prev' : '&larr; Prev'}
            }
        });

        // Scrollable datatable
        table = $('.datatable-scroll-y').DataTable({
            autoWidth: true,
            scrollY: 500,
            processing: true,
            serverSide: true,
            ajax: {
                url: route('patient.list').template,
                method:'post'
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'gender', name: 'gender' },
                { data: 'dob', name: 'dob' },
                { data: 'tel', name: 'tel' },
                { data: 'national_id', name: 'national_id' },
                { data: 'address', name: 'address' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action',searchable:false,orderable:false },
            ],
            order:[0,'desc'],
            "columnDefs": [
                { className: "text-center", "targets": [8] },
            ]
        });

        // Resize scrollable table when sidebar width changes
        $('.sidebar-control').on('click', function() {
            table.columns.adjust().draw();
        });
    };

    // Select2 for length menu styling
    var _componentSelect2 = function() {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        }
        // Initialize
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth: true,
            width: 'auto'
        });
        $('.form-control-select2').select2({
            width:'200px',
            ajax:{
                url:route('echo.template.search').template,
                method:'post',
                dataType:'json',
                delay:250,
                data:function (params) {
                    return {
                        _term: params.term
                    };
                },
            }
        });
        $('.form-control-select2').on("select2:select", function (e) {
            var id = $(this).val();
            var title = $(this).select2('data')[0].text;
            $('#echo-title').val(title);
            $.ajax({
                url:route('echo-template.show',id),
                dataType:'html',
                method:'get',
                success:function (data) {
                    $('#form-echo .note-editable').html(data);
                    $('.summernote').val(data);
                }
            })

        })
    };
    var _componentUniform = function(){
        $('.form-input-styled').uniform();
    };
    var _componentFloatingLabels = function() {
        // Variables
        var showClass = 'is-visible',
            animateClass = 'animate',
            labelWrapperClass = 'form-group-float',
            labelClass = 'form-group-float-label';

        // Setup
        $('input:not(.token-input):not(.bootstrap-tagsinput > input), textarea, select').on('checkval change', function () {
            // Define label
            var label = $(this).parents('.' + labelWrapperClass).children('.' + labelClass);

            // Toggle label
            if (this.value !== '') {
                label.addClass(showClass);
            }
            else {
                label.removeClass(showClass).addClass(animateClass);
            }
        }).on('keyup', function () {
            $(this).trigger('checkval');
        }).trigger('checkval').trigger('change');
        // Remove animation on page load
        $(window).on('load', function() {
            $('.' + labelWrapperClass).find('.' + showClass).removeClass(animateClass);
        });
    };
    var _componentSummernote = function () {
        // Default initialization
        $('.summernote').summernote({
            height:'400px',
            dialogsInBody: true
        });
    };
    var _componentFilePicker = function() {
        $('#lfm').filemanager('file');
    };
    //
    // Return objects assigned to module
    //
    return {
        init: function() {
            _componentDatatable();
            _componentSelect2();
        },
        initSelect2: function () {
            _componentSelect2();
        },
        initSummernote: function () {
            _componentSummernote();;
        },
        initFloatLabel: function () {
            _componentFloatingLabels();
        },
        initFilePicker: function () {
            _componentFilePicker();
        },
        initUniform: function () {
            _componentUniform();
        },

    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    CreateComponent.init();
    userAction();
});
function userAction() {
    var modal_action_dom = '#modal_action';
    var modal_sub_action_dom = '#modal_sub_action';
    /*button click create*/
    $(document).on('click','#patient-create',function () {
        // onShown callback
        $.ajax({
            url:route('patient.create'),
            dataType:'html',
            method:'get',
            success:function (data) {
                $('#modal-content').html(data);
                CreateComponent.initUniform();
            }
        });
        // onHidden callback
        $(modal_action_dom).on('hidden.bs.modal', function() {
            $('#modal-content').html('');
        });
    });
    /*store patient*/
    $(document).on('click','#user-store',function () {
        $.ajax({
            url:route('patient.store'),
            dataType:'json',
            method:'post',
            data:$('#form-patient').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                    document.getElementById('form-patient').reset();
                    table.draw();
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        })
    });
    /*button click update*/
    $(document).on('click','#patient-edit',function () {
        var id = parseInt($(this).attr('data-id'));
        // onShown callback
        $.ajax({
            url:route('patient.edit',id),
            dataType:'html',
            method:'get',
            success:function (data) {
                $('#modal-content').html(data);
                CreateComponent.initUniform();
                CreateComponent.initFloatLabel();
            }
        })
        // onHidden callback
        $(modal_action_dom).on('hidden.bs.modal', function() {
            $('#modal-content').html('');
        });
    });
    /*update patient*/
    $(document).on('click','#patient-update',function () {
        var id = parseInt($(this).attr('data-id'));
        $.ajax({
            url:route('patient.update',id),
            dataType:'json',
            method:'put',
            data:$('#form-patient').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                    table.draw();
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        })
    });
    /*destroy patient*/
    $(document).on('click','#patient-destroy',function () {
        var id = parseInt($(this).attr('data-id'));
        swal({
            title: 'តើអ្នកប្រាកដដែរឬទេ?',
            text: "ចុចពាក្យ បាទ/ចាស៎ដើម្បីបន្តរ",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'បាទ/ចាស៎',
            cancelButtonText: 'ទេ',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function(result) {
            if(result.value) {
                $.ajax({
                    url:route('patient.destroy',id),
                    dataType:'json',
                    method:'delete',
                    data:$('#form-patient').serialize(),
                    success:function (data) {
                        if (data.success) {
                            swal({
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-primary',
                                cancelButtonClass: 'btn btn-light',
                                title: 'រូចរាល់!',
                                text: 'ប្រតិបត្តិការជោគជ័យ!',
                                type: 'success'
                            });
                            table.draw();
                        }
                    }
                });
            }
            else if(result.dismiss === swal.DismissReason.cancel) {
                swal({
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary',
                    cancelButtonClass: 'btn btn-light',
                    title: 'មិនរូចរាល់!',
                    text: 'ប្រតិបត្តិការបរាជ័យ!',
                    type: 'error'
                });
            }
        });
    });
    /*echo create*/
    $(document).on('click','#echo-create',function () {
        var patient_id = parseInt($(this).attr('data-id'));
        // onShown callback
        $.ajax({
            url:route('echo.create'),
            dataType:'html',
            method:'get',
            data:{
                '_token':$('meta[name="csrf-token"]').attr('content'),'patient_id':patient_id
            },
            success:function (data) {
                $('#modal-content').html(data);
                CreateComponent.initFloatLabel();
                CreateComponent.initFilePicker();
                CreateComponent.initSummernote();
                CreateComponent.initSelect2();
            }
        });
        // onHidden callback
        $(modal_action_dom).on('hidden.bs.modal', function() {
            $('#modal-content').html('');
        });
    });
    /*create echo template*/
    $(document).on('click','#echo-template-create',function (){
        // onShown callback
        $.ajax({
            url:route('echo-template.create'),
            dataType:'html',
            method:'get',
            success:function (data) {
                $('#modal-sub-content').html(data);
                CreateComponent.initFloatLabel();
                CreateComponent.initSummernote();
            }
        });
        // onHidden callback
        $(modal_sub_action_dom).on('hidden.bs.modal', function() {
            $('#modal-sub-content').html('');
        });
    });
    /*store echo template*/
    $(document).on('click','#echo-template-store',function (){
        $.ajax({
            url:route('echo-template.store'),
            dataType:'json',
            method:'post',
            data:$('#form-echo-template').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                    document.getElementById('form-echo-template').reset();
                    $('#form-echo-template .note-editable').html('');
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        })
    });
    /*echo store and print function*/
    function echo_store(callback){
        $.ajax({
            url:route('echo.store'),
            dataType:'json',
            method:'post',
            data:$('#form-echo').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                    /*print page*/
                    callback(data.echo_id);
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        })
    }
    /*store echo and print*/
    $(document).on('click','#echo-store-print',function (){
        $.ajax({
            url:route('echo.store'),
            dataType:'json',
            method:'post',
            data:$('#form-echo').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                    /*print page*/
                    $.ajax({
                        url:route('echo.print',data.echo_id),
                        dataType:'html',
                        method:'get',
                        success:function (data) {
                            $('#echo-print-page').html(data);
                            $('#echo-print-page').printThis();
                        }
                    })
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        });
    });
    /*store echo*/
    $(document).on('click','#echo-store',function (){
        $.ajax({
            url:route('echo.store'),
            dataType:'json',
            method:'post',
            data:$('#form-echo').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        });
    });
    /*labor store and print function*/
    function labor_store(callback){
        $.ajax({
            url:route('labor.store'),
            dataType:'json',
            method:'post',
            data:$('#form-labor').serialize(),
            success:function (data) {
                if (data.success) {
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'រូចរាល់!',
                        text: 'ប្រតិបត្តិការជោគជ័យ!',
                        type: 'success'
                    });
                    /*print page*/
                    callback(data.labor_id);
                }else{
                    swal({
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        cancelButtonClass: 'btn btn-light',
                        title: 'មិនរូចរាល់!',
                        text: 'ប្រតិបត្តិការបរាជ័យ!',
                        type: 'warning'
                    });
                }
            }
        })
    }
    /*labor create*/
    $(document).on('click','#labor-create',function () {
        var patient_id = parseInt($(this).attr('data-id'));
        // onShown callback
        $.ajax({
            url:route('labor.create'),
            dataType:'html',
            method:'get',
            data:{
                '_token':$('meta[name="csrf-token"]').attr('content'),'patient_id':patient_id
            },
            success:function (data) {
                $('#modal-content').html(data);
                CreateComponent.initFloatLabel();
                CreateComponent.initFilePicker();
                CreateComponent.initSelect2();
            }
        });
        // onHidden callback
        $(modal_action_dom).on('hidden.bs.modal', function() {
            $('#modal-content').html('');
        });
    });
    /*store labor*/
    $(document).on('click','#labor-store',function (){
        labor_store(function (id) {
            console.log('saved')
        });
    });
    /*store and print labor*/
    $(document).on('click','#labor-store-print',function (){
        labor_store(function (id) {
            $.ajax({
                url:route('labor.print',id),
                dataType:'html',
                method:'get',
                success:function (data) {
                    var print_page_dom = '#labor-print-page';
                    $(print_page_dom).html(data);
                    coloring_input();
                    $(print_page_dom).printThis();
                }
            })
        })
    });
    /*calculate labor condition*/
    $(document).on('change keyup keydown keypress blur','#condition-input input',function (){
        var _this_val = parseFloat($(this).val());
        var rowNode = this.parentNode.parentNode;
        var _min = parseFloat($(rowNode).find('input[type="hidden"]').attr('min'));
        var _max = parseFloat($(rowNode).find('input[type="hidden"]').attr('max'));
        if (_this_val>=_min && _this_val <=_max) {
            $(this).removeClass('text-warning')
        }else {
            $(this).addClass('text-warning')
        }
    });
    /*positive negative select coloring*/
    $(document).on('change','fieldset select',function (){
        if ($(this).val()==='positive') {
            $(this).addClass('text-warning');
            $(this).removeClass('text-success');
        }else {
            $(this).addClass('text-success');
            $(this).removeClass('text-warning');
        }
    });
    /*set color*/
    function coloring_input() {
        var _print_input = document.querySelectorAll('#labor-print-page input:not(.other)');
        var _print_select = document.querySelectorAll('#labor-print-page select');
        $(_print_select).each(function (key,val) {
            if ($(val).val()==='positive') {
                $(val).addClass('text-warning');
                $(val).removeClass('text-success');
            }else if ($(val).val()==='negative') {
                $(val).addClass('text-success');
                $(val).removeClass('text-warning');
            }else {
                $(val).remove();
            }
        });
        $(_print_input).each(function (key,val) {
            var _this_val = parseFloat($(val).val());
            var rowNode = val.parentNode.parentNode;
            var _min = parseFloat($(rowNode).find('input[type="hidden"]').attr('min'));
            var _max = parseFloat($(rowNode).find('input[type="hidden"]').attr('max'));
            if (_this_val>=_min && _this_val <=_max) {
                $(val).removeClass('text-warning')
            }else {
                $(val).addClass('text-warning')
            }
            if (_this_val===-999){
                $(val).remove();
            }
        })
    }
}