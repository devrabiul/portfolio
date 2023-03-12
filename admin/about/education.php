<?php include '../configs/helper.php'; ?>
<?php include '../layouts/header.php'; ?>
<!-- Table css -->
<link href="../public/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css"
    media="screen">

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
                                <h4 class="page-title">Education Section</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Add Education</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="page-title text-right mb-3">Education Part</h5>
                                    <hr>
                                    <form action="about_post.php" method="post">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Education</label>
                                            <input type="text" name="title" id="title" class="form-control">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <label for="year" class="form-label">Year</label>
                                                <select name="year" class="form-control" id="year">
                                                    <?php $Cyear = date("Y");
                                                        for ($i=1998; $i <= $Cyear ; $i++) { ?>
                                                            <option value="<?=$i;?>"><?=$i;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="performance" class="form-label">Performance</label>
                                                <input type="number" name="performance" id="performance"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="educationAdd" class="btn btn-sm btn-primary text-white">Insert</button>
                                            <button type="reset" class="btn btn-sm btn-danger text-white">Reset</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-8 w-100">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="page-title text-right mb-3">Education Part</h5>
                                    <hr>
                                    <table class="table">
                                        <thead>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Performance</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php $educations = getEducation();
                                            foreach ($educations as $edu){ ?>
                                            <tr>
                                                <td><?=$edu['id']?></td>
                                                <td><?=$edu['title']?></td>
                                                <td><?=$edu['performance']?></td>
                                                <td><?=$edu['year']?></td>
                                                <td>
                                                    <a href="?id=<?=$edu['id']?>&status=stcngall" class="">
                                                        <?php if ($edu['status'] == 1) { ?>
                                                        <i class="mdi mdi-toggle-switch t_35 text-success"
                                                            title="Active"></i>
                                                        <?php } else { ?>
                                                        <i class="mdi mdi-toggle-switch-off t_35 text-secondary"
                                                            title="Deactive"></i>
                                                        <?php } ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-primary mb-2">Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger mb-2">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


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