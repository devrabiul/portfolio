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
                                    <h4 class="page-title">About Section</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Add About</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-4 d-flex align-items-stretch">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="page-title text-left mb-3">About Part</h5><hr>
                                        <form action="about_post.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="sub_title" class="form-label">Sub Title</label>
                                                <input type="text" name="sub_title" id="sub_title" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" id="title" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea name="description" id="description" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                    <label for="picture" class="form-label">Upload</label>
                                                    <input type="file" name="picture" class="form-control file_load">
                                            </div>

                                            <div class="mb-3">
                                                    <button type="submit" name="aboutAdd" class="btn btn-sm btn-primary text-white">Insert</button>
                                                    <button type="reset" class="btn btn-sm btn-danger text-white">Reset</button>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-8 d-flex align-items-stretch">
                                <div class="card shadow">
                                    <div class="card-body">
                                    <h5 class="page-title text-right mb-3">Education Part</h5><hr>
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
                                                        <?php $abouts = getAbout();
                                                        foreach ($abouts as $key => $about){ ?>
                                                        <tr>
                                                            <td><?=$key+1?></td>
                                                            <td>
                                                                <img src="../uploads/about/<?=$about['picture']?>" alt="Profile Photo" class="pro_img">
                                                            </td>
                                                            <td><?=$about['sub_title']?></td>
                                                            <td><?=$about['title']?></td>
                                                            <td><?=$about['description']?></td>
                                                            <td>
                                                                <a href="?id=<?=$about['id']?>&status=stcngall" class="">
                                                                    <?php if ($about['status'] == 1) { ?>
                                                                    <i class="mdi mdi-toggle-switch t_35 text-success"
                                                                        title="Active"></i>
                                                                    <?php } else { ?>
                                                                    <i class="mdi mdi-toggle-switch-off t_35 text-secondary"
                                                                        title="Deactive"></i>
                                                                    <?php } ?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a title="Edit" href="about_edit.php?id=<?=$about['id']?>" class="btn btn-sm btn-info mb-2"><i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a title="Delete" href="#" class="btn btn-sm btn-danger mb-2"><i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
        
                                    </div>
                                </div>
                            </div>


                        </div> <!-- end row --> 

                        <div class="row">
                        <div class="col-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                    <h5 class="page-title text-right mb-3">Recent Abouts</h5><hr>
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
                                                        <?php $abouts = getAboutDel();
                                                        foreach ($abouts as $about){ ?>
                                                        <tr>
                                                            <td><?=$about['id']?></td>
                                                            <td>
                                                                <img src="../uploads/about/<?=$about['picture']?>" alt="Profile Photo" class="pro_img">
                                                            </td>
                                                            <td><?=$about['sub_title']?></td>
                                                            <td><?=$about['title']?></td>
                                                            <td><?=$about['description']?></td>
                                                            <td>
                                                                <a title="Deactive" href="#" class="text-secondary"><i class="mdi mdi-toggle-switch-off t_35"></i></a>
                                                            </td>
                                                            <td>
                                                                <a title="Edit" href="#" class="btn btn-sm btn-info mb-2"><i class="mdi mdi-square-edit-outline"></i></a>
                                                                <a title="Delete" href="#" class="btn btn-sm btn-danger mb-2"><i class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
        
                                    </div>
                                </div>
                            </div>
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
		