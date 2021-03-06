
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}">
    <title>Elegant Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ url('dist/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=" {{ url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src=" {{ url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}} "></script>
    <![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elegant admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.blade.php">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{ url('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src=" {{ url('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src=" {{ url('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="{{ url('assets/images/logo-light-text.png')  }}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav my-lg-2">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">

                        <div class="btn-group">

                            <!-- Basic dropdown -->
                            <button class="btn btn-primary dropdown-toggle col-lg-12" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">{{ auth()->user()->email }}</button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <!-- Basic dropdown -->

                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <div class="d-flex no-block nav-text-box align-items-center">
            <span><img src="{{ url('assets/images/logo-icon.png') }}" alt="elegant admin template"></span>
            <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark" href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('category.index') }}" aria-expanded="false"><i class="fa fa-tag"></i><span class="hide-menu">Categories</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('product.index') }}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Products</a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu"></span>Orders</a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-line-chart"></i><span class="hide-menu"></span>Sales</a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-truck"></i><span class="hide-menu"></span>Shipping</a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-pie-chart"></i><span class="hide-menu"></span>Reports</a></li>
                    <li> <a class="waves-effect waves-dark" href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu"></span>Users</a></li>

                    <div class="text-center m-t-30">
                    </div>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

            @yield('content')

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © {{ date('Y') }} Made with <i class="fa fa-heart" style="color: red"></i> By Hassan Kotti
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ url('assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('assets/node_modules/popper/popper.min.js') }}"></script>
<script src=" {{ url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src=" {{ url('dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ url('dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ url('dist/js/sidebarmenu.js') }}"></script>
<!--stickey kit -->
<script src="{{url('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{url('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src=" {{ url('dist/js/custom.min.js') }}"></script>
</body>

</html>