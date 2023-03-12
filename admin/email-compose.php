<?php include 'layouts/header.php'; ?>
<link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.css" />

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
                                    <h4 class="page-title">Email Compose</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                        <li class="breadcrumb-item active">Email Compose</li>
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
                                <!-- Left sidebar -->
                                <div class="email-leftbar card">
                                    <a href="email-compose" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>
        
                                    <div class="mail-list m-t-20">
                                        <a href="#" class="active">Inbox <span class="ml-1">(18)</span></a>
                                        <a href="#">Starred</a>
                                        <a href="#">Important</a>
                                        <a href="#">Draft</a>
                                        <a href="#">Sent Mail</a>
                                        <a href="#">Trash</a>
                                    </div>
        
        
                                    <h6 class="m-t-30">Labels</h6>
        
                                    <div class="mail-list m-t-20">
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right"></span>Theme Support</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right"></span>Freelance</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-right"></span>Social</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-right"></span>Friends</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right"></span>Family</a>
                                    </div>
        
                                    <h6 class="m-t-30">Chat</h6>
        
                                    <div class="m-t-20">
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Scott Median</p>
                                                <p class="text-muted">Hello</p>
                                            </div>
                                        </a>
        
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Julian Rosa</p>
                                                <p class="text-muted">What about our next..</p>
                                            </div>
                                        </a>
        
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">David Medina</p>
                                                <p class="text-muted">Yeah everything is fine</p>
                                            </div>
                                        </a>
        
                                        <a href="#" class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/user-6.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Jay Baker</p>
                                                <p class="text-muted">Wow that's great</p>
                                            </div>
                                        </a>
        
                                    </div>
                                </div>
                                <!-- End Left sidebar -->
        
                                <!-- Right Sidebar -->
                                <div class="email-rightbar mb-3">
        
                                    <div class="card">
                                        <div class="card-body">
        
                                            <form>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="To">
                                                </div>
        
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <div class="summernote">
                                                        <h6>Hello Summer note</h6>
                                                        <ul>
                                                            <li>
                                                                Select a text to reveal the toolbar.
                                                            </li>
                                                            <li>
                                                                Edit rich document on-the-fly, so elastic!
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            End of air-mode area
                                                        </p>
        
                                                    </div>
                                                </div>
        
                                                <div class="btn-toolbar form-group mb-0">
                                                    <div class="">
                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-save"></i></button>
                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-trash-alt"></i></button>
                                                        <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end Col-9 -->
                            </div>
                        </div><!-- End row -->
			 </div>
		    </div>
			<?php include 'layouts/footer.php'; ?>
		   </div>
		</div>
		
<?php include 'layouts/footerScript.php'; ?>
<!-- summernote -->
<script src="public/plugins/summernote/summernote-bs4.min.js"></script>
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
<script>
    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    });
</script>
    
</body>
</html>
		