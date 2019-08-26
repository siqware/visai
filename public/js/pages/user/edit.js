// Setup module
// ------------------------------
var FormLayouts = function() {

    //
    // Setup module components
    //

    // filePicker
    var _componentFilePicker = function() {
        $('#lfm').filemanager('file');
    };

    // Uniform
    var _componentUniform = function() {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-pink-400'
        });
        $('.form-control-uniform').uniform();
        $('.form-check-input-styled').uniform();
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentUniform();
            _componentFilePicker();
        }
    }
}();
var SweetAlert = function () {
    //
    // Setup module components
    //

    // Sweet Alerts
    var _componentSweetAlert = function() {
        if (typeof swal == 'undefined') {
            console.warn('Warning - sweet_alert.min.js is not loaded.');
            return;
        }

        // Defaults
        var swalInit = swal.mixin({
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-light'
        });


        // Alert combination
        $('#sweet_combine').on('click', function() {
            swalInit({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function(result) {
                if(result.value) {
                    swalInit(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                    setTimeout($('#form-delete').submit(),50000)
                }
            });
        });
    };
    //
    // Return objects assigned to module
    //

    return {
        initComponents: function() {
            _componentSweetAlert();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    SweetAlert.initComponents();
    FormLayouts.init();
});
