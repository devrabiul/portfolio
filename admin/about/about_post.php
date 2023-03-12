<?php include '../configs/helper.php'; ?>

<?php

if (isset($_POST['aboutAdd'])) {
    aboutAdd($_POST);
}

if (isset($_POST['aboutEdit'])) {
    aboutEdit($_POST);
}

if (isset($_POST['educationAdd'])) {
    educationAdd($_POST);
}