@extends('master')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Yearly Sales -->
            <!-- ============================================================== -->

            <!-- task, page, download counter  start -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex m-b-30 align-items-center no-block">
                                <h5 class="card-title ">Yearly Sales</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12">
                                        <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                        <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart" style="height: 350px;"></div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row text-center m-b-20">
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Conetent Statistics</h5>
                            <h6 class="card-subtitle">check figuers</h6>
                            <div class="steamline m-t-40">
                                <div class="sl-item">
                                    <div class="sl-left bg-success"><i class="fa fa-tag"></i></div>
                                        <div class="font-medium">
                                            Category Count

                                        </div>
                                    <div class="sl-right">
                                        <div class="font-medium badge badge-purple">
                                                Available Categories {{ $categories->count() }}
                                        </div>
                                        <div><br></div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Products Count</div>
                                        <div class="desc badge badge-purple">Available Categories</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"><img class="img-circle" alt="user"
                                                              src="../assets/images/users/1.jpg"></div>
                                    <div class="sl-right">
                                        <div class="font-medium">John Doe <span class="sl-date"> 5pm</span></div>
                                        <div class="desc">Call today with gohn doe</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"><img class="img-circle" alt="user"
                                                              src="../assets/images/users/2.jpg"></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Go to the Doctor <span
                                                    class="sl-date">5 minutes ago</span></div>
                                        <div class="desc">Contrary to popular belief</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"><img class="img-circle" alt="user"
                                                              src="../assets/images/users/3.jpg"></div>
                                    <div class="sl-right">
                                        <div><a href="#">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span>
                                        </div>
                                        <div class="desc">Approve meeting with tiger
                                            <br><a href="javascript:void(0)"
                                                   class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a>
                                            <a href="javascript:void(0)"
                                               class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- News -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Categories</h5>
                                    <h6 class="card-subtitle"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- ============================================================== -->
                            <!-- End Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Start Page Content -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <!-- column -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th width="10%">#</th>
                                                        <th width="90%">Name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($categories as $category)
                                                        <tr>
                                                            <td>{{ $category->id }}</td>
                                                            <td>{{ $category->name }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- To do chat and message -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Feeds</h4>
                        </div>
                        <ul class="feeds p-b-20">
                            <li>
                                <div class="bg-info"><i class="fa fa-bell-o"></i></div>
                                You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                            <li>
                                <div class="bg-success"><i class="ti-server"></i></div>
                                Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                            <li>
                                <div class="bg-warning"><i class="ti-shopping-cart"></i></div>
                                New order received.<span class="text-muted">31 May</span></li>
                            <li>
                                <div class="bg-danger"><i class="ti-user"></i></div>
                                New user registered.<span class="text-muted">30 May</span></li>
                            <li>
                                <div class="bg-dark"><i class="fa fa-bell-o"></i></div>
                                New Version just arrived. <span class="text-muted">27 May</span></li>
                            <li>
                                <div class="bg-info"><i class="fa fa-bell-o"></i></div>
                                You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                            <li>
                                <div class="bg-danger"><i class="ti-user"></i></div>
                                New user registered.<span class="text-muted">30 May</span></li>
                            <li>
                                <div class="bg-dark"><i class="fa fa-bell-o"></i></div>
                                New Version just arrived. <span class="text-muted">27 May</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <div class="message-box">
                                <div class="message-widget message-scroll">
                                    <!-- Message -->
                                    @foreach($users as $user)
                                        <a href="javascript:void(0)">
                                            <div class="user-img"><img src="../assets/images/users/1.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                        class="profile-status online pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>{{ $user->name }}</h5> <span class="mail-desc">{{ $user->email }}</span>
                                                <span class="time">{{ $user->created_at }}</span></div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection