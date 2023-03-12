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
                                    <h4 class="page-title">Chartjs</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Chartjs</li>
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
        
                                        <h4 class="mt-0 header-title">Line Chart</h4>
        
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
        
                                        <canvas id="lineChart" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Bar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">84845</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">12001</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="bar" height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Pie Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">2536</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">69421</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">89854</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="pie" height="260"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Donut Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">9595</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">36524</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">62541</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="doughnut" height="260"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Polar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">4852</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">3652</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">85412</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="polarArea" height="300"> </canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Radar Chart</h4>
        
                                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">694</h5>
                                                <p class="text-muted">Activated</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">55210</h5>
                                                <p class="text-muted">Pending</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-0">489498</h5>
                                                <p class="text-muted">Deactivated</p>
                                            </li>
                                        </ul>
        
                                        <canvas id="radar" height="300"></canvas>
        
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
<!-- Chart JS -->
<script src="public/plugins/chart.js/chart.min.js"></script>
<script src="public/assets/pages/chartjs.init.js"></script>        
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		