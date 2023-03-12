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
                                    <h4 class="page-title">Flot Chart</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Flot Chart</li>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Multiple Statistics</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">362411</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">8489</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">985412</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="website-stats" class="flot-chart flot-chart-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Realtime Statistics</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">365214</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">6521</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">44587</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="flotRealTime" class="flot-chart flot-chart-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Donut Pie</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">5484</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">964984</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">98498</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="donut-chart">
                                            <div id="donut-chart-container" class="flot-chart flot-chart-height">
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div  id="pie-chart">
                                            <div id="pie-chart-container" class="flot-chart flot-chart-height">
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 

				
			 </div>
		    </div>
			<?php include 'layouts/footer.php'; ?>
		   </div>
		</div>
		
<?php include 'layouts/footerScript.php'; ?>

<script src="public/plugins/flot-chart/jquery.flot.min.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="public/plugins/flot-chart/curvedLines.js"></script>
<script src="public/plugins/flot-chart/jquery.flot.crosshair.js"></script>
<script src="public/assets/pages/flot.init.js"></script>
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		