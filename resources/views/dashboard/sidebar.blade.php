<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md sidebar-fixed">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{asset(Auth::user()->picture)}}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{Auth::user()->name}}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">Banteay Meanchey</span>
                </div>
            </div>
        </div>
        <!-- /user menu -->
        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="/" class="nav-link {{request()->is('/')? 'active':''}}">
                        <i class="icon-home4"></i>
                        <span>ផ្ទាំងដើម</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('patient.index')}}" class="nav-link {{request()->is('patient')? 'active':''}}">
                        <i class="icon-aid-kit"></i>
                        <span>អ្នកជម្ងឺ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('media')}}" class="nav-link {{request()->is('media')? 'active':''}}">
                        <i class="icon-images2"></i>
                        <span>មេឌៀ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link {{request()->is('user*')? 'active':''}}">
                        <i class="icon-users"></i>
                        <span>អ្នកប្រើប្រាស់</span>
                    </a>
                </li>
                {{--<li class="nav-item nav-item-submenu --}}{{--nav-item-expanded nav-item-open--}}{{--">
                    <a href="#" class="nav-link"><i class="icon-chevron-down"></i>
                        <span>Dropdown</span>
                    </a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../full/changelog.html" class="nav-link">
                        <i class="icon-bell-plus"></i>
                        <span>ជូនដំណឹង</span>
                        <span class="badge badge-pill bg-pink-400 align-self-center ml-auto">2.2</span>
                    </a>
                </li>--}}
                <!-- /main -->
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>