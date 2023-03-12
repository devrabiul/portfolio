<?php include 'layouts/header.php'; ?>
<!-- Bootstrap rating css -->
<link href="public/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">

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
                                    <h4 class="page-title">Rating</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Rating</li>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Default rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Half rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-primary" data-fractions="2"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Disabled rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" disabled="disabled"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Readonly rating with a value</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" data-readonly value="3"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Customized heart rating</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-heart text-danger" data-empty="mdi mdi-heart-outline text-danger"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Only fill selected</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star-outline text-primary" data-empty="mdi mdi-star-outline text-primary" data-filled-selected="mdi mdi-star text-primary"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Handle events</h5>
                                                    <input type="hidden" class="rating check" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Customize tooltips</h5>
                                                    <input type="hidden" class="rating-tooltip" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Default rating</h5>
                                                    <input type="hidden" class="rating-tooltip" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Set start rate to 5 [6..10]</h5>
                                                    <input type="hidden" class="rating-tooltip" data-start="5" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Set start and stop rate [2..10]</h5>
                                                    <input type="hidden" class="rating-tooltip" data-start="1" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Set start and stop rate [2..10] with step 2</h5>
                                                    <input type="hidden" class="rating-tooltip" data-stop="10" data-step="2" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Custom icons</h5>
                                                    <input type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked text-primary" data-empty="mdi mdi-checkbox-blank-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Fractional rating</h5>
                                                    <input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>
        
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <div class="p-4 text-center">
                                                    <h5 class="font-16 m-b-15">Custom CSS icons</h5>
                                                    <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" data-fractions="2"/>
                                                </div>
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
<!-- Bootstrap rating js -->
<script src="public/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
<script src="public/assets/pages/rating-init.js"></script>

		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		