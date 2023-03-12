<?php

// Banner Add Function
function bannerAdd($info){
    global $dbCon;
    $sub_title = mysqli_real_escape_string($dbCon, $info['sub_title']);
    $title  = mysqli_real_escape_string($dbCon, $info['title']);
    $description = mysqli_real_escape_string($dbCon, $info['description']);
    $btnText = mysqli_real_escape_string($dbCon, $info['btnText']);
    $btnUrl = mysqli_real_escape_string($dbCon, $info['btnUrl']);
    $picture = $_FILES['pro_pic'];
    $pro_pic = $picture['name'];
    $oldloc = $picture['tmp_name'];

    $explode = explode('.',$pro_pic);
    $extention = end($explode);
    $newPic = 'user_'.rand(11111, 99999).'.'.$extention;
    $newLoc = '../uploads/banners/'.$newPic;
    move_uploaded_file($oldloc, $newLoc);

    if (empty($sub_title)) {
        $_SESSION['banner_err'] = 'Give a sub title';
        header('location:banners.php');
    }else if(empty($title)) {
        $_SESSION['banner_err'] = 'Give a title';
        header('location:banners.php');
    }else if(empty($description)) {
        $_SESSION['banner_err'] = 'Give a description';
        header('location:banners.php');
    }else if(empty($btnText)) {
        $_SESSION['banner_err'] = 'Give a button text';
        header('location:banners.php');
    }else if(empty($btnUrl)) {
        $_SESSION['banner_err'] = 'Give a button url';
        header('location:banners.php');
    }else if(empty($pro_pic)) {
        $_SESSION['banner_err'] = 'Upload a photo';
        header('location:banners.php');
    }else{
        $querry = mysqli_query($dbCon, "INSERT INTO `banners`(`pro_pic`, `sub_title`, `title`, `description`, `btnText`, `btnUrl`) VALUES ('$newPic','$sub_title','$title','$description','$btnText','$btnUrl')");
        $_SESSION['banner_success'] = 'Banner Add Successfully';
        header('location:banners.php');
    }
}

// User Activity Status Change
function idstatusall($tableName, $id){

    global $dbCon;

    $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='0'");

    $idstatus = mysqli_query($dbCon, "SELECT * FROM $tableName WHERE id=$id");
    $assoc = mysqli_fetch_assoc($idstatus);

    if ($assoc['status'] == '1') {
        $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='0' WHERE id=$id");
    } else{
        $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='1' WHERE id=$id");
    }
}