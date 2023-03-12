<?php require '../configs/helper.php';?>
<?php include '../layouts/header.php'; ?>

<?php include '../layouts/headerStyle.php'; ?>

<?php
if (isset($_POST['copyrightUpdate'])) {
    $copyarea = $_POST['copyarea'];
    $querryCopyright = mysqli_query($dbCon, "UPDATE `settings` SET `text`='$copyarea' WHERE id=3");
}else{
    unset ($_POST['copyrightUpdate']);
}

// Social Icon Fuction
if (isset($_POST['socialAdd'])) {
    socialAdd($_POST);
}
if (isset($_GET['id']) && isset($_GET['status']) == 'stcng') {
    $tableName = 'social';
    $id = $_GET['id'];
    socialstatus($tableName, $id);
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
                                <h4 class="page-title">Basic Settings</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Basic Settings</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <?php 
                                    $querry2 = mysqli_query($dbCon, "SELECT * FROM `settings` WHERE id=1");
                                    $logo2 = mysqli_fetch_assoc($querry2);
                                    ?>
                                    <div class="d-flex justify-content-center align-items-center rounded bg-secondary" style="height:110px">
                                    <img id="blah1" alt="<?=$logo2['photo'];?>" width="100" class="img-fluid" src="/portfolio/admin/site-upload/<?=$logo2['photo'];?>" style="width:100%;"/>
                                    </div>
                                    
                                </div>
                                <div class="col-8">
                                    <form action="settings_post.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label for="uploadWhite" class="upload_box">Update White logo</label>
                                            <input type="file" name="uploadWhite" id="uploadWhite" class="form-control file_load"
                                            data-buttonname="btn-secondary" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="logoUpdate" class="btn btn-sm btn-info">Update</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <?php 
                                    $querry3 = mysqli_query($dbCon, "SELECT * FROM `settings` WHERE id=2");
                                    $logo3 = mysqli_fetch_assoc($querry3);
                                    ?>
                                    <div class="d-flex justify-content-center align-items-center rounded bg-secondary" style="height:110px">
                                    <img id="blah" alt="<?=$logo3['photo'];?>" width="100" class="img-fluid" src="/portfolio/admin/site-upload/<?=$logo3['photo'];?>" style="width:100%;"/>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <form action="settings_post.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="upload" class="upload_box">Update Color logo</label>
                                            <input type="file" name="photo" id="upload" class="form-control file_load"
                                                data-buttonname="btn-secondary" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="logo2Update" class="btn btn-sm btn-info">Update</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <?php 
                                $querry4 = mysqli_query($dbCon, "SELECT * FROM `settings` WHERE id=3");
                                $copyright= mysqli_fetch_assoc($querry4);
                            ?>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="copyarea" class="form-label">Copyright Text</label>
                                    <textarea name="copyarea" id="copyarea"
                                        class="form-control"><?=$copyright['text'];?></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info" name="copyrightUpdate">Update</button>
                                </div>
                            </form>
                        </div>


                    </div>

                    <div class="col-6 mt-4">
                            <div class="col-12">
                                <form action="" method="post">
                                    <!-- <label>Add Social</label> -->
                                    <div class="row align-items-center mb-3">
                                        <div class="col-4">
                                            <select name="platform" class="form-control">
                                                <option value="facebook">Facebook</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="linkedin">linkedin</option>
                                                <option value="whatsapp">whatsapp</option>
                                                <option value="pinterest">Pinterest</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <input type="url" name="url" class="form-control" placeholder="Add social Url">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-sm btn-info" name="socialAdd">Insert</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-rep-plugin">
                                <div class="table-responsive mb-0">
                                    <table id="tech-companies-1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Icon</th>
                                                <th>Url</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $socials = mysqli_query($dbCon, "SELECT * FROM `social`");
                                            foreach($socials as $social) { ?>
                                            <tr>
                                                <td><?=$social['id']?></td>
                                                <td>
                                                    <i class="mdi mdi-<?=$social['platform']?>"></i>
                                                </td>
                                                <td><?=$social['url']?></td>
                                                <td>
                                                    <a href="?id=<?=$social['id']?>&status=stcng" class="">
                                                        <?php if ($social['status'] == 1) { ?>
                                                        <i class="mdi mdi-toggle-switch t_35 text-success"
                                                            title="Active"></i>
                                                        <?php } else { ?>
                                                        <i class="mdi mdi-toggle-switch-off t_35 text-secondary"
                                                            title="Deactive"></i>
                                                        <?php } ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a title="Edit" href="/portfolio/admin/users/users-edit.php?id=<?=$social['id']?>" class="btn btn-sm btn-info mb-2">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    </a>
                                                    <a title="Delete" href="?id=<?=$social['id']?>&statusd=delete" class="btn btn-sm btn-danger mb-2">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
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

    <!-- App js -->
    <script src="../public/assets/js/app.js"></script>
</body>

</html>