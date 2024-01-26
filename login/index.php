<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: login.php?status=2");
}
?>

<h1> PáGina do Sistema </h1>
<?php
echo'Seja-bem Vindo!!' .$_SESSION["user"];
?>