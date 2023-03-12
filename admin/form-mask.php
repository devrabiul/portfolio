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
                                    <h4 class="page-title">Form Masks</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Masks</li>
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
        
                                        <h4 class="mt-0 header-title">Input Masks</h4>
                                        <p class="text-muted m-b-30 font-14">Input masks can be used to force the
                                            user to enter data conform a specific format. Unlike validation, the
                                            user can't enter any other key than the ones specified by the mask.
                                        </p>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label>ISBN 1</label>
                                                            <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                                            <span class="font-13 text-muted">e.g "999-99-999-9999-9"</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>ISBN 2</label>
                                                            <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                                            <span class="font-13 text-muted">999 99 999 9999 9</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>ISBN 3</label>
                                                            <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                                            <span class="font-13 text-muted">999/99/999/9999/9</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>IPV4</label>
                                                            <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                                            <span class="font-13 text-muted">192.168.110.310</span>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label>IPV6</label>
                                                            <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                                            <span class="font-13 text-muted">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                                        </div>
        
                                                    </form>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-20">
                                                    <form action="#">
        
                                                        <div class="form-group">
                                                            <label>Tax ID</label>
                                                            <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                                            <span class="font-13 text-muted">99-9999999</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                                            <span class="font-13 text-muted">(999) 999-9999</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Currency</label>
                                                            <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                                            <span class="font-13 text-muted">$ 999,999,999.99</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                                            <span class="font-13 text-muted">dd/mm/yyyy</span>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label>Date 2</label>
                                                            <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                                            <span class="font-13 text-muted">dd-mm-yyyy</span>
                                                        </div>
        
                                                    </form>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
			 </div>
		    </div>
			<?php include 'layouts/footer.php'; ?>
		   </div>
		</div>
		
<?php include 'layouts/footerScript.php'; ?>
 <!-- Bootstrap inputmask js -->
<script src="public/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
<script>
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();
</script>
</body>
</html>
		