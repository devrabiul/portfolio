<?php

// New user account creation
function userAdd($info){
    global $dbCon;

    $role = $info['role'];
    $name = $info['name'];
    $username = $info['username'];
    $email = $info['email'];
    $pass = $info['password'];
    $conpass = $info['conpass'];
    $password = password_hash($pass, PASSWORD_DEFAULT);
    
    $photoArray = $_FILES['photo'];
    $photo = $photoArray['name'];
    $oldloc = $photoArray['tmp_name'];

    $explode = explode('.',$photo);
    $extention = end($explode);
    $newPic = 'user_'.rand(11111, 99999).'.'.$extention;
    $newLoc = '../uploads/users/'.$newPic;
    move_uploaded_file($oldloc, $newLoc);

    $addUser = mysqli_query($dbCon, "INSERT INTO `users`(`role`, `name`, `username`, `email`, `password`,`photo`) VALUES ('$role','$name','$username','$email','$password','$newPic')");


    if ($addUser) { ?>
        <script>
            window.location.href='users.php';
        </script>
    <?php } else{
        $_SESSION['form_err'] = 'Invalid Submission';
    }
}

// User Activity Status Change
function idstatus($tableName, $id){

    global $dbCon;

    $idstatus = mysqli_query($dbCon, "SELECT * FROM $tableName WHERE id=$id");
    $assoc = mysqli_fetch_assoc($idstatus);

    if ($assoc['status'] == '1') {
        $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='0' WHERE id=$id"); ?>
        <script>
            window.location.href='users.php';
        </script>
    <?php } else{
        $status2 = mysqli_query($dbCon, "UPDATE $tableName SET `status`='1' WHERE id=$id"); ?>
        <script>
            window.location.href='users.php';
        </script>
    <?php }
}

// User Soft-delete - Move To Trash
function iddelete($tableName, $id){
    global $dbCon;
    $del_status = mysqli_query($dbCon, "UPDATE $tableName SET `del_status`=1 WHERE id=$id");
}

// User Permanent Delete
function idperdelete($tableName, $id){
    global $dbCon;
    $del_status = mysqli_query($dbCon, "DELETE FROM $tableName WHERE id=$id");
}

// User Restore-delete - Move To active users list
function idrestore($tableName, $id){
    global $dbCon;
    $del_status = mysqli_query($dbCon, "UPDATE $tableName SET `del_status`=0 WHERE id=$id");
}

// User account update
function userEdit($info){
    global $dbCon;
    $id= $_POST['id'];
    $role = $info['role'];
    $name = $info['name'];
    $username = $info['username'];
    $email = $info['email'];
    $pass = $info['password'];
    $conpass = $info['conpass'];
    $password = password_hash($pass, PASSWORD_DEFAULT);
    $photoArray = $_FILES['photo'];
    $photo = $info['name'];

    $addUser = mysqli_query($dbCon, "UPDATE `users` SET `role`='$role',`name`='$name',`username`='$username',`email`='$email',`password`='$password' WHERE id=$id");
    header('location:/portfolio/admin/users/users.php');
}