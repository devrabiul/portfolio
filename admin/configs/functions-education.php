<?php

function getEducationActive(){
    global $dbCon;
    $query = mysqli_query($dbCon, "SELECT * FROM `education` WHERE status=1 ORDER BY `education`.`year` DESC");
    return $query;
}

function getEducation(){
    global $dbCon;
    $query = mysqli_query($dbCon, "SELECT * FROM `education` WHERE del_status=0");
    return $query;
}

function getEducationDel(){
    global $dbCon;
    $query = mysqli_query($dbCon, "SELECT * FROM `education` WHERE del_status=1");
    return $query;
}

function educationAdd($info){
    global $dbCon;

    $title = $info['title'];
    $year = $info['year'];
    $performance = $info['performance'];

    $query = mysqli_query($dbCon, "INSERT INTO `education`(`title`, `year`, `performance`) VALUES ('$title','$year','$performance')");
    header('location:education.php');




}