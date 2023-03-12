<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

<body>
        <!-- Begin page -->
        <div id="wrapper">
		   <?php include 'layouts/navbar.php'; ?>
		   
		   <div class="content-page">
		   <div class="content">
		    <div class="container-fluid">
			       <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Sparkline Chart</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Sparkline Chart</li>
                                    </ol>

                                </div>
                                <div class="col-sm-6">
                                
                                <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings mr-2"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
                                        <div id="sparkline1" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Bar Chart</h4>
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body analytics-info">
                                        <h4 class="mt-0 header-title">Line Chart</h4>
                                        <div id="sparkline4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Composite Bar Chart</h4>
                                        <div id="sparkline3" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Line Charts</h4>
                                        <div id="sparkline5" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-success m-b-20">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title text-white">Discrete Chart</h4>
                                        <div id="sparkline6" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Bullet Chart</h4>
                                        <div id="sparkline7"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Box Plot Chart</h4>
                                        <div id="sparkline8" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Tristate Charts</h4>
                                        <div id="sparkline9" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
			 </div>
		    </div>
			<?php include 'layouts/footer.php'; ?>
		   </div>
		</div>
		
<?php include 'layouts/footerScript.php'; ?>
<!-- sparkline charts -->
<script src="public/plugins/sparklines-chart/jquery.sparkline.min.js"></script>
<script src="public/assets/pages/sparklines.init.js"></script>
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		