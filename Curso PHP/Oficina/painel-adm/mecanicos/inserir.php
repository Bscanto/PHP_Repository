<?php
require_once("../../conexao.php");

$nome = $_POST['nome_mec'];
$telefone = $_POST['telefone_mec'];
$cpf = $_POST['cpf_mec'];
$email = $_POST['email_mec'];
$endereco = $_POST['endereco_mec'];

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if($nome == ""){
	echo 'O nome é Obrigatório!';
	exit();
}

if($email == ""){
	echo 'O email é Obrigatório!';
	exit();
}

if($cpf == ""){
	echo 'O CPF é Obrigatório!';
	exit();
}


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $cpf){
$query = $pdo->query("SELECT * FROM mecanicos where cpf = '$cpf' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	echo 'O CPF já está Cadastrado!';
	exit();
 }
}
//FIM DA VERIFICAÇÃO 

if ($id == "") {
	$res = $pdo->prepare(" INSERT INTO mecanicos SET nome = :nome, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone ");
} else {
	$res = $pdo->prepare("UPDATE mecanicos SET nome = :nome, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone WHERE id = :id");
	$res->bindValue(":id", $id);
}
$res->bindValue(":nome", $nome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":email", $email);
$res->bindValue(":endereco", $endereco);
$res->execute();

echo 'Salvo com Sucesso!';
