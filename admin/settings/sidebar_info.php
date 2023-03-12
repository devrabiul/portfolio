<?php require '../configs/helper.php';?>

<?php include '../layouts/header.php'; ?>

<?php include '../layouts/headerStyle.php'; ?>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <?php include '../layouts/navbar.php'; ?>

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">

                    <div class="col-4">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="info">Information</label>
                                <textarea name="title" class="form-control"></textarea>
                            </div>
                        </form>
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