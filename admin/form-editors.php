<?php include 'layouts/header.php'; ?>
<link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.css">

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
                                    <h4 class="page-title">Form Editors</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Editors</li>
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
        
                                        <h4 class="mt-0 header-title">Tinymce wysihtml5</h4>
                                        <p class="text-muted m-b-30">Bootstrap-wysihtml5 is a javascript
                                            plugin that makes it easy to create simple, beautiful wysiwyg editors
                                            with the help of wysihtml5 and Twitter Bootstrap.</p>
        
                                        <form method="post">
                                            <textarea id="elm1" name="area"></textarea>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Summernote</h4>
                                        <p class="text-muted m-b-30">Super simple wysiwyg editor on bootstrap</p>
        
                                        <div class="summernote">Hello Summernote</div>

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
<!--tinymce js-->
<script src="public/plugins/tinymce/tinymce.min.js"></script>
<!--Summernote js-->
<script src="public/plugins/summernote/summernote-bs4.min.js"></script>
<script src="public/assets/pages/form-editors.int.js"></script>
<!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		