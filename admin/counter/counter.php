<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

<?php include '../layouts/headerStyle.php'; ?>
<style>
    .file_load::-webkit-file-upload-button {
        border: none;
    }
</style>
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
                                    <h4 class="page-title">Services</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Services</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" id="title" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea name="description" id="description" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                    <label for="picture" class="form-label">Upload Icon</label>
                                                    <input type="file" class="form-control file_load">
                                            </div>

                                            <div class="mb-3">
                                                    <a type="submit" class="btn btn-sm btn-primary text-white" href="#">Insert</a>
                                                    <a type="reset" class="btn btn-sm btn-danger text-white" href="#">Reset</a>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Photo</th>
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
                            </div>

                        </div> <!-- end row --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="page-title text-left mb-3">Trash</h5><hr>
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
                                                                <a title="Restore" href="#" class="btn btn-sm btn-info mb-2"><i class="mdi mdi-restore"></i></a>
                                                                <a title="Permanent Delete" href="#" class="btn btn-sm btn-danger mb-2"><i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
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
		