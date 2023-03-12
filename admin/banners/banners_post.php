<?php session_start();?>
<?php require '../configs/helper.php';?>
<?php
 if (isset($_POST['bannerAdd'])) {
    bannerAdd($_POST);
    }