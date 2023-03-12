<?php include 'layouts/header.php'; ?>
<!--calendar css-->
<link href="public/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">


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
                                    <h4 class="page-title">Calendar</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
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
                                        <div id='calendar'></div>
        
                                        <div style='clear:both'></div>
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
<!-- Jquery-Ui -->
<script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="public/plugins/moment/moment.js"></script>
<script src='public/plugins/fullcalendar/js/fullcalendar.min.js'></script>
<script src="public/assets/pages/calendar-init.js"></script>        

<!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		