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
                                    <h4 class="page-title">Form Repeater</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Repeater</li>
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
                                        <h4 class="mt-0 header-title m-b-20">Example</h4>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">
                                                    <div  class="form-group col-lg-2">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" name="untyped-input" class="form-control"/>
                                                    </div>
        
                                                    <div  class="form-group col-lg-2">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" class="form-control"/>
                                                    </div>
        
                                                    <div  class="form-group col-lg-2">
                                                        <label for="subject">Subject</label>
                                                        <input type="text" id="subject" class="form-control"/>
                                                    </div>
        
                                                    <div class="form-group col-lg-2">
                                                        <label for="resume">Resume</label>
                                                        <input type="file" class="form-control-file" id="resume">
                                                    </div>
        
                                                    <div class="form-group col-lg-2">
                                                        <label for="message">Message</label>
                                                        <textarea id="message" class="form-control"></textarea>
                                                    </div>
                                                    
                                                    <div class="col-lg-2 align-self-center">
                                                        <input data-repeater-delete type="button" class="btn btn-primary btn-block" value="Delete"/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <input data-repeater-create type="button" class="btn btn-success mo-mt-2" value="Add"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title m-b-20">Nested</h4>
                                        <form class="outer-repeater">
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="form-group">
                                                        <label for="formname">Name :</label>
                                                        <input type="text" class="form-control" id="formname" placeholder="Enter your Name...">
                                                    </div>
        
                                                    <div class="form-group">
                                                        <label for="formemail">Email :</label>
                                                        <input type="email" class="form-control" id="formemail" placeholder="Enter your Email...">
                                                    </div>
        
                                                    <div class="inner-repeater mb-4">
                                                        <div data-repeater-list="inner-group" class="inner form-group">
                                                            <label>Phone no :</label>
                                                            <div data-repeater-item class="inner mb-3 row">
                                                                <div class="col-md-10 col-8">
                                                                    <input type="text" class="inner form-control" placeholder="Enter your phone no..."/>
                                                                </div>
                                                                <div class="col-md-2 col-4">
                                                                    <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="Delete"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <input data-repeater-create type="button" class="btn btn-success inner" value="Add Number"/>
                                                    </div>
        
                                                    <div class="form-group">
                                                        <label class="d-block mb-3">Gender :</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                                                        </div>
                                                    </div>
        
                                                    <div class="form-group">
                                                        <label for="formmessage">Message :</label>
                                                        <textarea id="formmessage" class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
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
<!-- form repeater js -->
<script src="public/plugins/jquery-repeater/jquery.repeater.min.js"></script>
<script src="public/assets/pages/form-repeater.int.js"></script>
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		