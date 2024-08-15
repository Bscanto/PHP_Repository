<?php
require_once("../../conexao.php");

$nome = $_POST['nome_mec'];
$telefone = $_POST['telefone_mec'];
$cpf = $_POST['cpf_mec'];
$email = $_POST['email_mec'];
$endereco = $_POST['endereco_mec'];

$antigo = $_POST['antigo'];
$antigo2 = $_POST['antigo2'];
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

// Validação de CPF
if (strlen($cpf) <= 11) {
    echo 'O CPF deve ter 11 dígitos!';
    exit();
}

// Validação de Telefone
if (strlen($telefone) <= 11) {
    echo 'O Telefone deve ter 11 dígitos!';
    exit();
}

// Validação de E-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'E-mail inválido!';
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


//VERIFICAR SE O REGISTRO COM O MESMO EMAIL JÁ EXISTE NO BANCO
if($antigo2 != $email){
	$query = $pdo->query("SELECT * FROM mecanicos where email = '$email' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if ($total_reg > 0) {
		echo 'O Email já está Cadastrado!';
		exit();
	 }
	}
	//FIM DA VERIFICAÇÃO 


if ($id == "") {
	$res = $pdo->prepare(" INSERT INTO mecanicos SET nome = :nome, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone ");

	$res2 = $pdo->prepare(" INSERT INTO usuarios SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, nivel = :nivel ");
$res2->bindValue(":senha", '123');
$res2->bindValue(":nivel", 'mecanico');

} else {
	$res = $pdo->prepare("UPDATE mecanicos SET nome = :nome, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone WHERE id = '$id' ");

	$res2 = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email WHERE cpf = '$antigo' ");
	
	
}
$res->bindValue(":nome", $nome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":email", $email);
$res->bindValue(":endereco", $endereco);

$res2->bindValue(":nome", $nome);
$res2->bindValue(":cpf", $cpf);
$res2->bindValue(":email", $email);


$res->execute();
$res2->execute();

echo 'Salvo com Sucesso!';
