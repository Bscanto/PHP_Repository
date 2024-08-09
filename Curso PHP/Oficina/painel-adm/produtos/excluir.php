<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];
$query = $pdo->query("SELECT * FROM produtos where id = '$id' ");
echo 'Excluído com Sucesso!';

?>