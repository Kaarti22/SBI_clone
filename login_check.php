<?php
    include("connection.php");
    $userID = $_POST["username"];
    $pass = $_POST["password"];
    $sql_query = "select * from master_login where userid = '$userID' and pass = '$pass'";
    $res = mysqli_query($connection,$sql_query);
    if($result = mysqli_fetch_assoc($res)){
        $_SESSION["userid"] = $result["userid"];
        header('location:depositor_info.php');
    } else {
        header('location:login_page.html');
    }
?>