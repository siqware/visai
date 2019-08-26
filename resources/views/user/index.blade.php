@extends('dashboard.main')
@section('page-title')
    អ្នកប្រើប្រាស់
@stop
@section('page-header')
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">អ្នកប្រើប្រាស់</span> - បញ្ជីអ្នកប្រើប្រាស់</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group">
                        <a href="{{route('user.index')}}" class="btn btn-primary {{request()->is('user')? 'active':''}}">
                            <i class="icon-list-ordered "></i>
                            បញ្ជី
                        </a>
                        <a href="{{route('user.create')}}" class="btn btn-primary {{request()->is('user/create')? 'active':''}}">
                            <i class="icon-database-add "></i>
                            បន្ថែម
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('page-content')
    <!-- Scrollable datatable -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">បញ្ជីអ្នកប្រើប្រាស់</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-sm table-striped datatable-scroll-y" width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
    <!-- /scrollable datatable -->
@stop
@section('page-js-route')
    @routes
@stop
@push('page-js')
    <script src="{{asset('ui/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('ui/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('js/pages/user/index.js')}}"></script>
@endpush