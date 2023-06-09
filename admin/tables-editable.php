<?php include 'layouts/header.php'; ?>
   <!-- DataTables -->
<link href="public/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="public/plugins/datatables/autoFill.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="public/plugins/datatables/keyTable.dataTables.min.css" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
<link href="public/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- x-editable -->
<link href="public/plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="page-title">Editable Table</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Editable Table</li>
                                    </ol>

                                </div>
                                <div class="col-sm-6">
                                
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-user mr-2"></i> Sign in
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
        
                                        <h4 class="mt-0 header-title mb-4">Datatable Editable</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-editable">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Age (AutoFill)</th>
                                                    <th>Qty (AutoFill and Editable)</th>
                                                    <th>Cost (Editable)</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>1</td>
                                                    <td data-original-value="11">11</td>
                                                    <td data-original-value="1"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">1</a></td>
                                                    <td data-original-value="1.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">1.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td data-original-value="22">22</td>
                                                    <td data-original-value="2"><a href="#" data-type="text" data-pk="2" class="editable" data-url="" data-title="Edit Quantity">2</a></td>
                                                    <td data-original-value="2.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">2.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td data-original-value="33">33</td>
                                                    <td data-original-value="3"><a href="#" data-type="text" data-pk="3" class="editable" data-url="" data-title="Edit Quantity">3</a></td>
                                                    <td data-original-value="3.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">3.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td data-original-value="44">44</td>
                                                    <td data-original-value="4"><a href="#" data-type="text" data-pk="4" class="editable" data-url="" data-title="Edit Quantity">4</a></td>
                                                    <td data-original-value="4.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">4.99</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td data-original-value="55">55</td>
                                                    <td data-original-value="5"><a href="#" data-type="text" data-pk="5" class="editable" data-url="" data-title="Edit Quantity">5</a></td>
                                                    <td data-original-value="5.99"><a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Quantity">5.99</a></td>
                                                </tr>
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
<!-- Required datatable js -->
<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="public/plugins/datatables/dataTables.autoFill.min.js"></script>
<script src="public/plugins/datatables/autoFill.bootstrap4.min.js"></script>
<script src="public/plugins/datatables/dataTables.keyTable.min.js"></script>
<!-- Responsive examples -->
<script src="public/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="public/plugins/x-editable/js/bootstrap-editable.min.js"></script>
<script src="public/assets/pages/table-editable.int.js"></script>  
 <!-- App js -->
<script src="public/assets/js/app.js"></script>
</body>
</html>
		