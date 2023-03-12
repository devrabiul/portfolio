<?php include 'layouts/header.php'; ?>
  <!-- Magnific popup -->
<link href="public/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

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
                                    <h4 class="page-title">Lightbox</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Lightbox</li>
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
        
                                        <h4 class="mt-0 header-title">Single image lightbox</h4>
                                        <p class="text-muted m-b-30">Three simple popups with different scaling settings.</p>
        
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="mt-0 font-14 m-b-15">Fits (Horz/Vert)</h5>
                                                <a class="image-popup-vertical-fit" href="public/assets/images/small/img-2.jpg" title="Caption. Can be aligned it to any side and contain any HTML.">
                                                    <img class="img-fluid" alt="" src="public/assets/images/small/img-2.jpg"  width="145">
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mt-0 font-14 m-b-15">Effects</h5>
                                                <a class="image-popup-no-margins" href="public/assets/images/small/img-3.jpg">
                                                    <img class="img-fluid" alt="" src="public/assets/images/small/img-3.jpg" width="75">
                                                </a>
                                                <p class="mt-2 mb-0 text-muted">No gaps, zoom animation, close icon in top-right corner.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Lightbox gallery</h4>
                                        <p class="text-muted m-b-30">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
        
                                        <div class="popup-gallery">
                                            <a class="float-left" href="public/assets/images/small/img-1.jpg" title="Project 1">
                                                <div class="img-responsive">
                                                    <img src="public/assets/images/small/img-1.jpg" alt="" width="120">
                                                </div>
                                            </a>
                                            <a class="float-left" href="public/assets/images/small/img-2.jpg" title="Project 2">
                                                <div class="img-responsive">
                                                    <img src="public/assets/images/small/img-2.jpg" alt="" width="120">
                                                </div>
                                            </a>
                                            <a class="float-left" href="assets/images/small/img-3.jpg" title="Project 3">
                                                <div class="img-responsive">
                                                    <img src="assets/images/small/img-3.jpg" alt="" width="120">
                                                </div>
                                            </a>
                                            <a class="float-left" href="public/assets/images/small/img-4.jpg" title="Project 4">
                                                <div class="img-responsive">
                                                    <img src="public/assets/images/small/img-4.jpg" alt="" width="120">
                                                </div>
                                            </a>
                                            <a class="float-left" href="public/assets/images/small/img-5.jpg" title="Project 5">
                                                <div class="img-responsive">
                                                    <img src="public/assets/images/small/img-5.jpg" alt="" width="120">
                                                </div>
                                            </a>
                                            <a class="float-left" href="public/ssets/images/small/img-6.jpg" title="Project 6">
                                                <div class="img-responsive">
                                                    <img src="public/assets/images/small/img-6.jpg" alt="" width="120">
                                                </div>
                                            </a>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Zoom Gallery</h4>
                                        <p class="text-muted m-b-30">Zoom effect works only with images.</p>
        
                                        <div class="zoom-gallery">
                                            <a class="float-left" href="public/assets/images/small/img-3.jpg" title="Project 1"><img src="public/assets/images/small/img-3.jpg" alt="" width="275"></a>
                                            <a class="float-left" href="public/assets/images/small/img-7.jpg" title="Project 2"><img src="public/assets/images/small/img-7.jpg" alt="" width="275"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Popup with video or map</h4>
                                        <p class="text-muted m-b-30">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
        
                                        <div class="row">
                                            <div class="col-12">
                                                <a class="popup-youtube btn btn-secondary mo-mb-2" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
                                                <a class="popup-vimeo btn btn-secondary mo-mb-2" href="https://vimeo.com/45830194">Open Vimeo Video</a>
                                                <a class="popup-gmaps btn btn-secondary mo-mb-2" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
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
<!-- Magnific popup -->
<script src="public/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="public/assets/pages/lightbox.js"></script>   
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		