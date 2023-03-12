<?php require '../configs/helper.php';?>
<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

<?php include '../layouts/headerStyle.php'; ?>

<?php
    $id = $_GET['id'];
    $querry = mysqli_query($dbCon, "SELECT * FROM `users` WHERE id=$id");
    $idSelect = mysqli_fetch_assoc($querry);

    if (isset($_POST['usersedit'])) {
        userEdit($_POST);
    } 
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
                                    <h4 class="page-title">Users</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Edit User</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" value="<?=$idSelect['id'];?>">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-control">
                                            <option value="<?=$idSelect['role'];?>"><?=$idSelect['role'];?></option>
                                            <option value="Admin">Admin</option>
                                            <option value="Editor">Editor</option>
                                            <option value="Member">Member</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?=$idSelect['name'];?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" value="<?=$idSelect['username'];?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="<?=$idSelect['email'];?>">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label for="conpass" class="form-label">Confirm Password</label>
                                            <input type="password" name="conpass" id="conpass" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Upload Photo</label>
                                        <input type="file" name="photo" id="photo" class="form-control file_load">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="usersedit" class="btn btn-sm btn-success text-white">Update</button>
                                    </div>
                                </form>
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
		