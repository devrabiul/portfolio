<?php include 'layouts/header.php'; ?>
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="public/plugins/chartist/css/chartist.min.css">

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
                                    <h4 class="page-title">Chartist Chart</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Chartist Chart</li>
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
        
                                        <h4 class="mt-0 header-title">Overlapping bars on mobile</h4>
        
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
        
                                        <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Stacked bar chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">5241</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">65411</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">51654</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Animating a Donut with Svg.animate</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">748949</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">5181</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">101025</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="animating-donut" class="ct-chart ct-golden-section"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Simple pie chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">48484</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">48652</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">85412</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Advanced Smil Animations</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">45410</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">4442</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">3201</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="smil-animations" class="ct-chart ct-golden-section"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Simple line chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">44242</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">75221</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">65212</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Line Scatter Diagram</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">5677</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">5542</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">12422</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Line chart with area</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">4234</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">64521</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">94521</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
        
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
   <!--Chartist Chart-->
<script src="public/plugins/chartist/js/chartist.min.js"></script>
<script src="public/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="public/assets/pages/chartist.init.js"></script>
	
<!-- App js -->
<script src="publicassets/js/app.js"></script>
 </body>
</html>
		