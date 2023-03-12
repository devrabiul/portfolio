<?php

function getAboutAll(){
    global $dbCon;
    $query = mysqli_query($dbCon, "SELECT * FROM `abouts`");
    return $query;
}
function getAbout(){
    global $dbCon;
    $query = mysqli_query($dbCon, "SELECT * FROM `abouts` WHERE del_status=0");
    return $query;
}

function getAboutDel(){
    global $dbCon;
    $query = mysqli_query($dbCon, "SELECT * FROM `abouts` WHERE del_status=1");
    return $query;
}

function aboutAdd($info){
    global $dbCon;

    $sub_title = mysqli_real_escape_string($dbCon, $info['sub_title']);
    $title = mysqli_real_escape_string($dbCon, $info['title']);
    $description = mysqli_real_escape_string($dbCon, $info['description']);
    $picture = $_FILES['picture']['name'];
    $oldLoc = $_FILES['picture']['tmp_name'];

    $explode = explode('.', $picture);
    $extention = end($explode);
    $newName = 'about_'.rand(11111, 99999).'.'.$extention;
    $newLoc = '../uploads/about/'.$newName;
    move_uploaded_file($oldLoc, $newLoc);

    $query = mysqli_query($dbCon, "INSERT INTO `abouts`(`sub_title`, `title`, `description`, `picture`) VALUES ('$sub_title','$title','$description','$newName')");
    header('location:about.php');

}
function aboutEdit($info){
    global $dbCon;

    $id = mysqli_real_escape_string($dbCon, $info['id']);
    $sub_title = mysqli_real_escape_string($dbCon, $info['sub_title']);
    $title = mysqli_real_escape_string($dbCon, $info['title']);
    $description = mysqli_real_escape_string($dbCon, $info['description']);
    $picture = $_FILES['picture']['name'];
    $oldLoc = $_FILES['picture']['tmp_name'];

    if (!empty($picture)) {
        $selectQuery = mysqli_query($dbCon, "SELECT * FROM `abouts` WHERE id=$id");
        $idAssoc = mysqli_fetch_assoc($selectQuery);

        $pastPic = '../uploads/about/'.$idAssoc['picture'];
        unlink($pastPic);

        $explode = explode('.', $picture);
        $extention = end($explode);
        $newName = 'about_'.rand(11111, 99999).'.'.$extention;
        $newLoc = '../uploads/about/'.$newName;
        move_uploaded_file($oldLoc, $newLoc);


        $query = mysqli_query($dbCon, "UPDATE `abouts` SET `sub_title`='$sub_title',`title`='$title',`description`='$description',`picture`='$newName' WHERE id=$id");
        header('location:about.php');
    }else{
        $query = mysqli_query($dbCon, "UPDATE `abouts` SET `sub_title`='$sub_title',`title`='$title',`description`='$description' WHERE id=$id");
        header('location:about.php');
    }




}