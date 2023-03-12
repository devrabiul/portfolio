<?php


// Add Social Link
function socialAdd($social){
    global $dbCon;
    $platform = $social['platform'];
    $url = $social['url'];
    $querry = mysqli_query($dbCon, "INSERT INTO `social`( `platform`, `url`) VALUES ('$platform ','$url')");
}

// User Activity Status Change
function socialstatus($tableName, $id){

    // global $dbCon;

    // $query = mysqli_query($dbCon, "SELECT COUNT(*) active FROM `social` WHERE status=1");
    // $queryAssoc = mysqli_fetch_assoc($query);

    // $idstatus = mysqli_query($dbCon, "SELECT * FROM $tableName WHERE id=$id");
    // $assoc = mysqli_fetch_assoc($idstatus);

    // // echo $queryAssoc['active'];die();

    // if ($queryAssoc['active'] <= 5) {
    //     if ($assoc['status'] == '1') {
    //         $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='0' WHERE id=$id");
    //     } else{
    //         $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='1' WHERE id=$id");
    //     }
    // }else{
    //     $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='0' WHERE id=$id");
        
    // }
    
}

// Update 2nd Logo
function LogoUpdate(){
    global $dbCon;
    $photo = $_FILES['uploadWhite']['name'];
    $select = mysqli_query($dbCon, "SELECT * FROM `settings` WHERE id=1");
    $logoAssoc = mysqli_fetch_assoc($select);

    $deleteLogo = "../site-upload/".$logoAssoc['photo'];
    unlink($deleteLogo);

    $photoName = strtolower(str_replace(' ','-', $photo));
    $oldLoc = $_FILES['uploadWhite']['tmp_name'];
    $newLoc = "../site-upload/".$photoName;

    move_uploaded_file($oldLoc, $newLoc);
    $insertLogo = mysqli_query($dbCon, "UPDATE `settings` SET `photo`='$photoName' WHERE id=1");
    header('location:settings.php');
}

// Update 2nd Logo
function LogoUpdate2(){
    global $dbCon;
    $photo = $_FILES['photo']['name'];
    $select = mysqli_query($dbCon, "SELECT * FROM `settings` WHERE id=2");
    $logoAssoc = mysqli_fetch_assoc($select);

    $deleteLogo = "site-upload/".$logoAssoc['photo'];
    unlink($deleteLogo);

    $photoName = strtolower(str_replace(' ','-', $photo));
    $oldLoc = $_FILES['photo']['tmp_name'];
    $newLoc = "site-upload/".$photo;

    move_uploaded_file($oldLoc, $newLoc);
    $insertLogo = mysqli_query($dbCon, "UPDATE `settings` SET `photo`='$photoName' WHERE id=2");
    header('location:settings.php');
}



?>

