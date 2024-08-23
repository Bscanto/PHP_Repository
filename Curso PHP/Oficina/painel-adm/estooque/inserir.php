<?php
require_once("../../conexao.php");

$fornecedor = $_POST['fornecedor'];
$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];
$estoque = $_POST['quantidade'];

$id = $_POST['txtid2'];


f($valor_venda == ""){
	echo 'O Valor da venda é Obrigatório!';
	exit();
}

if($valor_compra == ""){
	echo 'O Valor da compra é Obrigatório!';
	exit();
}

if($estoque == ""){
	echo 'O Estoque é Obrigatório!';
	exit();
}


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $nome){
$query = $pdo->query("SELECT * FROM categorias where nome = '$nome' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	echo 'A categoria já está Cadastrada!';
	exit();
 }
}
//FIM DA VERIFICAÇÃO 




if ($id == "") {
	$res = $pdo->prepare(" INSERT INTO categorias SET nome = :nome");


} else {
	$res = $pdo->prepare("UPDATE categorias SET nome = :nome WHERE id = '$id' ");
	
}
$res->bindValue(":nome", $nome);
$res->execute();

echo 'Salvo com Sucesso!';
