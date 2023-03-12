<?php session_start();?>
<?php require '../configs/helper.php';?>
<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css"
    media="screen">

<?php include '../layouts/headerStyle.php'; ?>

<?php

 if (isset($_GET['id']) && isset($_GET['status']) == 'stcngall') {
    $tableName = 'banners';
    $id = $_GET['id'];
    idstatusall($tableName, $id);
}
if (isset($_GET['id']) && isset($_GET['statusd']) == 'delete') {
    $tableName = 'banners';
    $id = $_GET['id'];
    iddelete($tableName, $id);
}
if (isset($_GET['id']) && isset($_GET['statuspd']) == 'perdelete') {
    $tableName = 'banners';
    $id = $_GET['id'];
    idperdelete($tableName, $id);
}
if (isset($_GET['id']) && isset($_GET['restore']) == 'yes') {
    $tableName = 'banners';
    $id = $_GET['id'];
    idrestore($tableName, $id);
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
                    <div class="col-4 d-flex align-items-stretch">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <form action="banners_post.php" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <label for="subtitle" class="form-label">Sub Title</label>
                                                    <input type="text" name="sub_title" id="subtitle" class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea name="description" id="description" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                    <label for="btnText" class="form-label">Button Text</label>
                                                    <input type="text" name="btnText" id="btnText" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="btnUrl" class="form-label">Button URL</label>
                                                    <input type="url" name="btnUrl" id="btnUrl" class="form-control">
                                                </div>
                                            <div class="mb-3">
                                                    <label for="pro_pic" class="form-label">Upload</label>
                                                    <input type="file" name="pro_pic" class="form-control file_load">
                                            </div>

                                            <div class="mb-3">
                                                    <button type="submit" class="btn btn-sm btn-primary text-white" name="bannerAdd">Insert</button>
                                                    <button type="reset" class="btn btn-sm btn-danger text-white">Reset</button>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        <div class="col-8 d-flex align-items-stretch">
                            <div class="card shadow">
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
                                                    <?php $banners = mysqli_query($dbCon, "SELECT * FROM `banners` WHERE del_status=0");
                                                        foreach($banners as $banner) { ?>
                                                    <tr>
                                                        <td><?=$banner['id']?></td>
                                                        <td>
                                                            <img src="../uploads/banners/<?=$banner['pro_pic']?>"
                                                                alt="Profile Photo" class="pro_img">
                                                        </td>
                                                        <td><?=$banner['sub_title']?></td>
                                                        <td><?=$banner['title']?></td>
                                                        <td><?=$banner['description']?></td>
                                                        <td>
                                                            <a href="?id=<?=$banner['id']?>&status=stcngall" class="">
                                                                <?php if ($banner['status'] == 1) { ?>
                                                                <i class="mdi mdi-toggle-switch t_35 text-success"
                                                                    title="Active"></i>
                                                                <?php } else { ?>
                                                                <i class="mdi mdi-toggle-switch-off t_35 text-secondary"
                                                                    title="Deactive"></i>
                                                                <?php } ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a title="Edit"
                                                                href="/portfolio/admin/users/users-edit.php?id=<?=$banner['id']?>"
                                                                class="btn btn-sm btn-info mb-2">
                                                                <i class="mdi mdi-square-edit-outline"></i>
                                                            </a>
                                                            <a title="Delete"
                                                                name="?id=<?=$banner['id']?>&statusd=delete" style="cursor:pointer;"
                                                                class="btn btn-sm btn-danger mb-2 text-white id_delete">
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
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h4>Trash Banner</h4>
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
                                                    <?php $banners_trash = mysqli_query($dbCon, "SELECT * FROM `banners` WHERE del_status=1");
                                                        foreach($banners_trash as $banner) { ?>
                                                    <tr>
                                                        <td><?=$banner['id']?></td>
                                                        <td>
                                                            <img src="../uploads/banners/<?=$banner['pro_pic']?>"
                                                                alt="Profile Photo" class="pro_img">
                                                        </td>
                                                        <td><?=$banner['sub_title']?></td>
                                                        <td><?=$banner['title']?></td>
                                                        <td><?=$banner['description']?></td>
                                                        <td>
                                                            <a title="Restore" href="?id=<?=$banner['id']?>&restore=yes"
                                                                class="btn btn-sm btn-info mb-2"><i
                                                                    class="mdi mdi-restore"></i></a>
                                                            <a title="Permanent Delete" style="cursor:pointer;"
                                                                name="?id=<?=$banner['id']?>&statuspd=perdelete" 
                                                                class="btn btn-sm btn-danger text-white mb-2 id_perDelete">
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

    <?php if (isset($_SESSION['banner_err'])) { ?>
        <script>
            Swal.fire({
            position: 'bottom-end',
            icon: 'error',
            title: '<?=$_SESSION['banner_err']?>',
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    <?php } unset ($_SESSION['banner_err'])?>

    <?php if (isset($_SESSION['banner_success'])) { ?>
        <script>
            Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: '<?=$_SESSION['banner_success']?>',
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    <?php } unset ($_SESSION['banner_success'])?>

    <script>
    $('.id_delete').click(function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You can bring it back!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Move Trash'
        }).then((result) => {
        if (result.isConfirmed) {
            var link = $(this).attr('name');
            window.location.href = link;

        }
        })
    })
</script>

    <script>
    $('.id_perDelete').click(function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You can't bring it back!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Permanently Delete!'
        }).then((result) => {
        if (result.isConfirmed) {
            var link = $(this).attr('name');
            window.location.href = link;

        }
        })
    })
</script>

</body>

</html>

