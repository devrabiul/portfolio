<?php include 'layouts/header.php'; ?>  
<?php include 'layouts/headerStyle.php'; ?>

 <body class="fixed-left">
    <?php include 'layouts/loader.php'; ?>
        <!-- Begin page -->
        <div id="wrapper">

        <?php include 'layouts/navbar.php'; ?>

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <!-- Search -->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>
                                <!-- Fullscreen -->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                        <i class="mdi mdi-fullscreen noti-icon"></i>
                                    </a>
                                </li>
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        English <img src="public/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Peity Charts</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>
                    </div>

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title m-b-30">Line Chart</h4>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(103,168,228,0.3)"],"stroke": ["rgba(103,168,228,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(74,193,142,0.3)"],"stroke": ["rgba(74,193,142,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(232, 65, 38,0.3)"],"stroke": ["rgba(232, 65, 38,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(126, 98, 88,0.3)"],"stroke": ["rgba(126, 98, 88,0.8)"]}' data-height="60">3,5,5,2,8,2,5,3,8,9,4,2,5,6,4,5,3,7,6,1</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title m-b-30">Bar Chart</h4>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-bar" data-peity='{ "fill": ["#8d6e63", "#67a8e4"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-bar" data-peity='{ "fill": ["#f06292", "#f2f2f2"]}' data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-bar" data-peity='{ "fill": ["#fb8c00", "#009688"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="p-4">
                                                        <span class="peity-bar" data-peity='{ "fill": ["#3bc3e9", "#4ac18e"]}' data-width="100%" data-height="60">3,5,5,2,8,2,5,3,8,9,4,2,5,6,4,5,3,7,6,1</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title m-b-30">Pie Chart</h4>

                                            <div class="row text-center">
                                                <div class="col-lg-2 col-md-6 m-b-20">
                                                    <span class="peity-pie" data-peity='{ "fill": ["#f06292", "#f2f2f2"]}' data-width="60" data-height="60">2/8</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-20">
                                                    <span class="peity-pie" data-peity='{ "fill": ["#6d60b0", "#f2f2f2"]}' data-width="60" data-height="60">120/360</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-20">
                                                    <span class="peity-pie" data-peity='{ "fill": ["#afb42b", "#f2f2f2"]}' data-width="60" data-height="60">1.52/1.561</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-20">
                                                    <span class="peity-pie" data-peity='{ "fill": ["#009688", "#f2f2f2"]}' data-width="60" data-height="60">1,4</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-20">
                                                    <span class="peity-pie" data-peity='{ "fill": ["#5468da", "#f2f2f2"]}' data-width="60" data-height="60">226,134</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6">
                                                    <span class="peity-pie" data-peity='{ "fill": ["#8d6e63", "#f2f2f2"]}' data-width="60" data-height="60">0.52,1.041</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title m-b-30">Donut Chart</h4>

                                            <div class="row text-center">
                                                <div class="col-lg-2 col-md-6 m-b-30">
                                                    <span class="peity-donut" data-peity='{ "fill": ["#707070", "#f2f2f2"]}' data-width="60" data-height="60">1/5</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-30">
                                                    <span class="peity-donut" data-peity='{ "fill": ["#ea553d", "#f2f2f2"]}' data-width="60" data-height="60">226/360</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-30">
                                                    <span class="peity-donut" data-peity='{ "fill": ["#ffbb44", "#f2f2f2"], "innerRadius": 16, "radius": 32 }' data-width="60" data-height="60">0.52/1.561</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-30">
                                                    <span class="peity-donut" data-peity='{ "fill": ["#3bc3e9", "#f2f2f2"], "innerRadius": 20, "radius": 32 }' data-width="60" data-height="60">1,4</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6 m-b-30">
                                                    <span class="peity-donut" data-peity='{ "fill": ["#4ac18e", "#f2f2f2"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                                </div>
                                                <div class="col-lg-2 col-md-6">
                                                    <span class="peity-donut" data-peity='{ "fill": ["#1d1e3a", "#f2f2f2"], "innerRadius": 8, "radius": 32 }' data-width="60" data-height="60">0.52,1.041</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div> 
                </div> 
                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>

        <!-- Chart JS -->
        <script src="public/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="public/assets/pages/peity.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>