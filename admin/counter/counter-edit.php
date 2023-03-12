<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

<?php include '../layouts/headerStyle.php'; ?>
<body>
        <!-- Begin page -->
        <div id="wrapper">
		   <?php include '../layouts/navbar.php'; ?>
		   
		   <div class="content-page">
		   <div class="content">
		    <div class="container-fluid">
			         <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Banners</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Banners</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Photo</th>
                                                        <th style="width: 100px;">Sub Title</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <img src="" alt="Profile Photo">
                                                            </td>
                                                            <td>Sub Title</td>
                                                            <td>Title</td>
                                                            <td>I’ve always been drawn to the overlap between design and development. Enjoy each aspect, and love building sites & mobile apps from start to finish, for clients come from all over the world.</td>
                                                            <td>
                                                                <a title="Deactive" href="#" class="text-secondary"><i class="mdi mdi-toggle-switch-off t_35"></i></a>
                                                            </td>
                                                            <td>
                                                                <a title="Edit" href="#" class="btn btn-sm btn-info mb-2"><i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a title="Delete" href="#" class="btn btn-sm btn-danger mb-2"><i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
			 </div>
		    </div>
			<?php include '../layouts/footer.php'; ?>
		   </div>
		</div>
		
<?php include '../layouts/footerScript.php'; ?>
<!-- Responsive-table-->
<script src="../public/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>
 <!-- App js -->
<script src="../public/assets/js/app.js"></script>
</body>
</html>
		