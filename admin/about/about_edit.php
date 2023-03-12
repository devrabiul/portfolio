<?php include '../configs/helper.php'; ?>
<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

<?php include '../layouts/headerStyle.php'; ?>
<style>
    .file_load::-webkit-file-upload-button {
        border: none;
    }
</style>

<?php
$id = $_GET['id'];
$query = mysqli_query($dbCon, "SELECT * FROM `abouts` WHERE id=$id");
$about = mysqli_fetch_assoc($query); 

?>

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
                                    <h4 class="page-title">About</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Edit About</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row justify-content-center align-items-center">
                            <div class="col-6">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <form action="about_post.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?=$about['id']?>">
                                            <div class="mb-3">
                                                <label for="sub_title" class="form-label">Sub Title</label>
                                                <input type="text" name="sub_title" id="sub_title" value="<?=$about['sub_title']?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" id="title" value="<?=$about['title']?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea name="description" id="description" rows="4" class="form-control"><?=$about['description']?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                    <label for="picture" class="form-label">Upload</label>
                                                    <input type="file" name="picture" class="form-control file_load">
                                            </div>

                                            <div class="mb-3">
                                                    <button type="submit" name="aboutEdit" class="btn btn-sm btn-success text-white">Update</button>
                                            </div>
                                        </form>
        
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
		