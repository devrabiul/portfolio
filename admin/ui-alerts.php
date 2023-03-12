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
                                    <h4 class="page-title">Alerts</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Alerts</li>
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
        
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted m-b-30 ">Alerts are available for any length of
                                            text, as well as an optional dismiss button. For proper styling, use one
                                            of the four <strong>required</strong> contextual classes (e.g., <code
                                                    class="highlighter-rouge">.alert-success</code>). For inline
                                            dismissal, use the alerts jQuery plugin.</p>
        
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger mb-0" role="alert">
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Link color</h4>
                                        <p class="text-muted m-b-30 ">Use the <code
                                                class="highlighter-rouge">.alert-link</code> utility class to
                                            quickly provide matching colored links within any alert.</p>
        
                                        <div class="">
                                            <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                            </div>
                                            <div class="alert alert-danger mb-0" role="alert">
                                                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Dismissing</h4>
                                        <p class="text-muted m-b-30 ">You can see this in action with a live demo:</p>
        
                                        <div class="">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Additional content</h4>
                                        <p class="text-muted m-b-30 ">Alerts can also contain additional HTML elements like headings and paragraphs.</p>
        
                                        <div class="">
                                            <div class="alert alert-success mb-0" role="alert">
                                                <h4 class="alert-heading font-18">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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
        
                                        <h4 class="mt-0 header-title">Examples</h4>
                                        <p class="text-muted m-b-30 ">Alerts are available for any length of
                                            text, as well as an optional dismiss button. For proper styling, use one
                                            of the four <strong>required</strong> contextual classes (e.g., <code
                                                    class="highlighter-rouge">.alert-success .bg-**</code>). For inline
                                            dismissal, use the alerts jQuery plugin.</p>
        
                                        <div class="">
                                            <div class="alert alert-success bg-success text-white" role="alert">
                                                <strong>Well done!</strong> You successfully read this important alert message.
                                            </div>
                                            <div class="alert alert-info bg-info text-white" role="alert">
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                            <div class="alert alert-warning bg-warning text-white" role="alert">
                                                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                            </div>
                                            <div class="alert alert-danger bg-danger text-white mb-0" role="alert">
                                                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
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
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		