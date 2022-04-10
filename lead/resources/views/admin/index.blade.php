@extends('layouts.backend_layout')
@section('content')


<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-4">Total Revenue</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                           data-bgColor="#F9B9B9" value="58"
                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                           data-thickness=".15"/>
                </div>

                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1"> 256 </h2>
                    <p class="text-muted mb-1">Revenue today</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Sales Analytics</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-success badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1"> 8451 </h2>
                    <p class="text-muted mb-3">Revenue today</p>
                </div>
                <div class="progress progress-bar-alt-success progress-sm">
                    <div class="progress-bar bg-success" role="progressbar"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                            style="width: 77%;">
                        <span class="sr-only">77% Complete</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-4">Statistics</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                            data-bgColor="#FFE6BA" value="80"
                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                            data-thickness=".15"/>
                </div>
                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                    <p class="text-muted mb-1">Revenue today</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Daily Sales</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-pink badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1"> 158 </h2>
                    <p class="text-muted mb-3">Revenue today</p>
                </div>
                <div class="progress progress-bar-alt-pink progress-sm">
                    <div class="progress-bar bg-pink" role="progressbar"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                            style="width: 77%;">
                        <span class="sr-only">77% Complete</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end col -->

</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0">Daily Sales</h4>

            <div class="widget-chart text-center">
                <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                <ul class="list-inline chart-detail-list mb-0">
                    <li class="list-inline-item">
                        <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                    </li>
                    <li class="list-inline-item">
                        <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>
            <h4 class="header-title mt-0">Statistics</h4>
            <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>
            <h4 class="header-title mt-0">Total Revenue</h4>
            <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
        </div>
    </div><!-- end col -->

</div>
<!-- end row -->


<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="media">
                <div class="avatar-lg mr-3">
                    <img src="{{ asset('admin_assets') }}/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="user">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="mt-0 mb-1">Chadengle</h5>
                    <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                    <small class="text-warning"><b>Admin</b></small>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="media">
                <div class="avatar-lg mr-3">
                    <img src="{{ asset('admin_assets') }}/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="user">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="mt-0 mb-1"> Michael Zenaty</h5>
                    <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                    <small class="text-pink"><b>Support Lead</b></small>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="media">
                <div class="avatar-lg mr-3">
                    <img src="{{ asset('admin_assets') }}/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="user">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="mt-0 mb-1">Stillnotdavid</h5>
                    <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                    <small class="text-success"><b>Designer</b></small>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="media">
                <div class="avatar-lg mr-3">
                    <img src="{{ asset('admin_assets') }}/images/users/user-10.jpg" class="img-fluid rounded-circle" alt="user">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="mt-0 mb-1">Tomaslau</h5>
                    <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                    <small class="text-info"><b>Developer</b></small>
                </div>
            </div>
        </div>
    </div><!-- end col -->

</div>
<!-- end row -->



@endsection
