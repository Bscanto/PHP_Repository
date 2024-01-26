<?php
session_start();
 if (isset($_POST['user']) && !empty($_POST['user']) 
 && isset($_POST['pwd']) && !empty($_POST['pwd'])){
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    if($user == "Bruno" && $pwd == "admin"){
        $_SESSION['user'] = "Bruno";
        header("location: index.php");
    }
    else {
        header("location: login.php?status=1");
    }

 }
?>
