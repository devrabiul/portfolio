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
                                    <h4 class="page-title">Session Timeout</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Session Timeout</li>
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
        
                                        <h5 class="mt-0 header-title">Bootstrap-session-timeout</h5>
                                        <p class="text-muted m-b-30">Session timeout and keep-alive control
                                            with a nice Bootstrap warning dialog.</p>
        
                                        <div>
                                            <p>After a set amount of idle time, a Bootstrap warning dialog is shown
                                                to the user with the option to either log out, or stay connected. If
                                                "Logout" button is selected, the page is redirected to a logout URL.
                                                If "Stay Connected" is selected the dialog closes and the session is
                                                kept alive. If no option is selected after another set amount of
                                                idle time, the page is automatically redirected to a set timeout
                                                URL.</p>
        
                                            <p>
                                                Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.
                                            </p>
        
                                            <p class="mb-0">
                                                As long as the user is active, the (optional) keep-alive URL keeps
                                                getting pinged and the session stays alive. If you have no need to
                                                keep the server-side session alive via the keep-alive URL, you can
                                                also use this plugin as a simple lock mechanism that redirects to
                                                your lock-session or log-out URL after a set amount of idle time.
                                            </p>
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
<!-- Session timeout js -->
<script src="public/plugins/bootstrap-session-timeout/bootstrap-session-timeout.min.js"></script>
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
     <script>
            $.sessionTimeout({
                keepAliveUrl: 'pages-blank',
                logoutButton:'Logout',
                logoutUrl: 'pages-login',
                redirUrl: 'pages-lock-screen',
                warnAfter: 3000,
                redirAfter: 30000,
                countdownMessage: 'Redirecting in {timer} seconds.'
            });
        </script>
</body>
</html>
		