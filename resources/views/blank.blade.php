@extends('dashboard.main')
@section('page-title')
    Blank Page
@stop
@section('page-header')
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - 1
                    Sidebar</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                <div class="btn-toolbar justify-content-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary">
                            <i class="icon-list-ordered "></i>
                            បញ្ជី
                        </a>
                        <a href="#" class="btn btn-primary">
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
    <!-- Basic card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Basic card</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="font-weight-semibold">Start your development with no hassle!</h6>
            <p class="mb-3">Common problem of templates is that all code is deeply integrated into the core.
                This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to
                remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra
                code easily just by removing the path to specific LESS file with component styling. All plugins
                and their options are also in separate files. Use only components you actually need!</p>

            <h6 class="font-weight-semibold">What is this?</h6>
            <p class="mb-3">Starter kit is a set of pages, useful for developers to start development process
                from scratch. Each layout includes base components only: layout, page kits, color system which
                is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup.
                CSS files are compiled without any plugins or components. Starter kit was moved to a separate
                folder for better accessibility.</p>

            <h6 class="font-weight-semibold">How does it work?</h6>
            <p>You open one of the starter pages, add necessary plugins, uncomment paths to files in
                components.less file, compile new CSS. That's it. I'd also recommend to open one of main pages
                with functionality you need and copy all paths/JS code from there to your new page, it's just
                faster and easier.</p>
        </div>
    </div>
    <!-- /basic card -->
    <!-- Basic table -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Basic table</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            Seed project includes the most basic components that can help you in development process - basic
            grid example, card, table and form layouts with standard components. Nothing extra. Easily turn on
            and off styles of different components in <code>_config.scss</code> file so that your CSS is always
            as clean as possible. Bootstrap components are always enabled though.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Eugene</td>
                    <td>Kopyov</td>
                    <td>@Kopyov</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Victoria</td>
                    <td>Baker</td>
                    <td>@Vicky</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>James</td>
                    <td>Alexander</td>
                    <td>@Alex</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Franklin</td>
                    <td>Morrison</td>
                    <td>@Frank</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /basic table -->

    <!-- 2 columns form -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Multiple columns</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details</legend>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Enter your name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Enter your password:</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" placeholder="Your strong password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Select your state:</label>
                                <div class="col-lg-9">
                                    <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="KY">Kentucky</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Attach screenshot:</label>
                                <div class="col-lg-9">
                                    <input type="file" class="form-input-styled" data-fouc>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Your message:</label>
                                <div class="col-lg-9">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset>
                            <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details</legend>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Your name:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First name" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email:</label>
                                <div class="col-lg-9">
                                    <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Phone #:</label>
                                <div class="col-lg-9">
                                    <input type="text" placeholder="+99-99-9999-9999" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Location:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    <option value="1">Canada</option>
                                                    <option value="2">USA</option>
                                                    <option value="3">Australia</option>
                                                    <option value="4">Germany</option>
                                                </select>
                                            </div>

                                            <input type="text" placeholder="ZIP code" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" placeholder="State/Province" class="form-control mb-3">
                                            <input type="text" placeholder="City" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Address:</label>
                                <div class="col-lg-9">
                                    <input type="text" placeholder="Your address of living" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Additional message:</label>
                                <div class="col-lg-9">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /2 columns form -->
@stop
@section('page-js-route')
    @routes
@stop
@push('page-js')
    <script src="{{asset('ui/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
@endpush