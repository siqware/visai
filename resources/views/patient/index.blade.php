@extends('dashboard.main')
@section('page-title')
    អ្នកជម្ងឺ
@stop
@section('page-header')
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">អ្នកជម្ងឺ</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group">
                        <button class="btn btn-primary" id="patient-create" data-toggle="modal" data-target="#modal_action">
                            <i class="icon-database-add "></i>
                            បន្ថែម
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page-content')
    <!-- 2 columns form -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">អ្នកជម្ងឺ</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="#">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table datatable-scroll-y table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ឈ្មោះ</th>
                                <th>ភេទ</th>
                                <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                                <th>លេខទូរស័ព្ទ</th>
                                <th>លេខអត្ថសញ្ញាណប័ណ្ឌ</th>
                                <th>អាស័យដ្ឋាន</th>
                                <th>ថ្ងៃចុះឈ្មោះ</th>
                                <th class="text-center">ប្រតិបត្តិការ</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /2 columns form -->
    <!-- operation modal -->
    <!-- Large modal -->
    <div id="modal_action" class="modal fade">
        <div class="modal-dialog modal-xl" id="modal-content">
            {{--get data--}}

        </div>
    </div>
    <!-- /large modal -->
    <!-- Large modal -->
    <div id="modal_sub_action" class="modal fade">
        <div class="modal-dialog modal-lg" id="modal-sub-content">
            {{--get data--}}

        </div>
    </div>
@stop
@section('page-js-route')
    @routes
@stop
@push('page-js')
    <script src="{{asset('ui/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('ui/global_assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script src="{{asset('ui/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('ui/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script src="{{asset('ui/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('ui/global_assets/js/plugins/print/printThis.js')}}"></script>
    <script src="{{asset('js/pages/patient/index.js')}}"></script>
@endpush