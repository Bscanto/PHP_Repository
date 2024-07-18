<?php 
require_once("conexao.php");

$email = $_POST['email'];
$senha  = $_POST['senha'];

$query = $pdo->query("SELECT * FROM usuarios where email = '$email' and senha = '$senha' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
  if($total_reg > 0){
    echo 'Usuario Existente';

  }else{
    echo 'Usuario não Existente';
  }



?>