<?php
require_once("../../conexao.php");

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data_venc = $_POST['data$data_venc'];

$id = $_POST['txtid2'];




if ($id == "") {
	$res = $pdo->prepare(" INSERT INTO categorias SET nome = :nome");


} else {
	$res = $pdo->prepare("UPDATE categorias SET nome = :nome WHERE id = '$id' ");
	
}
$res->bindValue(":nome", $nome);
$res->execute();

echo 'Salvo com Sucesso!';
