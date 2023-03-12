<?php include 'layouts/header.php'; ?>

<!-- jvectormap -->
<link href="public/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

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
                                    <h4 class="page-title">Vector Map</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                                        <li class="breadcrumb-item active">Vector Map</li>
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
        
                                        <h4 class="mt-0 header-title">World Map</h4>
                                        <p class="text-muted m-b-30">Example of vector map.</p>
        
                                        <div id="world-map-markers" class="vector-map-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">USA Map</h4>
                                        <p class="text-muted m-b-30">Example of vector map.</p>
        
                                        <div id="usa" class="vector-map-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">UK Map</h4>
                                        <p class="text-muted m-b-30">Example of vector map.</p>
        
                                        <div id="uk" class="vector-map-height"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Chicago Map</h4>
                                        <p class="text-muted m-b-30">Example of vector map.</p>
        
                                        <div id="chicago" class="vector-map-height"></div>
        
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
		
<!-- Jvector Map js -->
<script src="public/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="public/plugins/jvectormap/gdp-data.js"></script>
<script src="public/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="public/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="public/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="public/assets/pages/jvectormap.init.js"></script>
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		