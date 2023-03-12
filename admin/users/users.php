<?php require '../configs/helper.php';?>
<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css"
    media="screen">

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
                                <h4 class="page-title">Users</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Users</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <?php
                    
                        if (isset($_POST['usersAdd'])) {
                            userAdd($_POST);
                        }

                        if (isset($_GET['id']) && isset($_GET['status']) == 'stcng') {
                            $tableName = 'users';
                            $id = $_GET['id'];
                            // $status = $_GET['status'];
                            idstatus($tableName, $id);
                        }
                        if (isset($_GET['id']) && isset($_GET['statusd']) == 'delete') {
                            $tableName = 'users';
                            $id = $_GET['id'];
                            iddelete($tableName, $id);
                        }
                        if (isset($_GET['id']) && isset($_GET['statuspd']) == 'perdelete') {
                            $tableName = 'users';
                            $id = $_GET['id'];
                            idperdelete($tableName, $id);
                        }
                        if (isset($_GET['id']) && isset($_GET['restore']) == 'yes') {
                            $tableName = 'users';
                            $id = $_GET['id'];
                            idrestore($tableName, $id);
                        }

                    ?>

                    <div class="row">
                        <div class="col-4 d-flex align-items-stretch">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select name="role" id="role" class="form-control">
                                                <option value="Admin">Admin</option>
                                                <option value="Editor">Editor</option>
                                                <option value="Member">Member</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" id="username" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control">
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
                                            <button type="submit" name="usersAdd"
                                                class="btn btn-sm btn-primary text-white">Insert</button>
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
                                                        <th>Role</th>
                                                        <th>Name</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $users = mysqli_query($dbCon, "SELECT * FROM `users` WHERE del_status=0");
                                            foreach($users as $user) { ?>
                                                    <tr>
                                                        <td><?=$user['id']?></td>
                                                        <td>
                                                            <img src="../uploads/users/<?=$user['photo']?>"
                                                                alt="Profile Photo" class="pro_img">
                                                        </td>
                                                        <td><?=$user['role']?></td>
                                                        <td><?=$user['name']?></td>
                                                        <td><?=$user['username']?></td>
                                                        <td><?=$user['email']?></td>
                                                        <td>

                                                            <a href="?id=<?=$user['id']?>&status=stcng" class="">
                                                                <?php if ($user['status'] == 1) { ?>
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
                                                                href="/portfolio/admin/users/users-edit.php?id=<?=$user['id']?>"
                                                                class="btn btn-sm btn-info mb-2">
                                                                <i class="mdi mdi-square-edit-outline"></i>
                                                            </a>
                                                            <a title="Delete" href="?id=<?=$user['id']?>&statusd=delete"
                                                                class="btn btn-sm btn-danger mb-2">
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

                    </div> <!-- end row -->

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="page-title text-left">Trash</h5>
                                    <hr>
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0">
                                            <table id="tech-companies-1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Photo</th>
                                                        <th>Name</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $users = mysqli_query($dbCon, "SELECT * FROM `users` WHERE del_status=1");
                                                    foreach($users as $userdel) { ?>
                                                        <tr>
                                                            <td><?=$userdel['id']?></td>
                                                            <td>
                                                                <img src="../uploads/users/<?=$userdel['photo']?>"
                                                                    alt="Profile Photo" class="pro_img">
                                                            </td>
                                                            <td><?=$userdel['role']?></td>
                                                            <td><?=$userdel['name']?></td>
                                                            <td><?=$userdel['username']?></td>
                                                            <td><?=$userdel['email']?></td>
                                                            <td>

                                                                <a title="Restore"
                                                                    href="?id=<?=$userdel['id']?>&restore=yes"
                                                                    class="btn btn-sm btn-info mb-2">
                                                                    <i class="mdi mdi-restore"></i>
                                                                </a>

                                                                <a title="Permanent Delete"
                                                                    href="?id=<?=$userdel['id']?>&statuspd=perdelete"
                                                                    class="btn btn-sm btn-danger mb-2">
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