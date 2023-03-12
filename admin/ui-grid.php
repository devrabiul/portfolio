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
                                    <h4 class="page-title">Grid</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Grid</li>
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
        
                                        <h4 class="mt-0 header-title">Grid options</h4>
                                        <p class="text-muted m-b-30">See how aspects of the Bootstrap grid
                                            system work across multiple devices with a handy table.</p>
        
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped mb-0">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center">
                                                        Extra small<br>
                                                        <small>&lt;576px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Small<br>
                                                        <small>≥576px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Medium<br>
                                                        <small>≥768px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Large<br>
                                                        <small>≥992px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Extra large<br>
                                                        <small>≥1200px</small>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Grid behavior</th>
                                                    <td>Horizontal at all times</td>
                                                    <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                                    <td><code>.col-</code></td>
                                                    <td><code>.col-sm-</code></td>
                                                    <td><code>.col-md-</code></td>
                                                    <td><code>.col-lg-</code></td>
                                                    <td><code>.col-xl-</code></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row"># of columns</th>
                                                    <td colspan="5">12</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                                    <td colspan="5">20px (10px on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Nestable</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Offsets</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                </tbody>
                                            </table>
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
		
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		