<?php 
require_once("../../conexao.php"); 

$nome = $_POST['nome_mec'];
$telefone = $_POST['telefone_mec'];
$cpf = $_POST['cpf_mec'];
$email = $_POST['email_mec'];
$endereco = $_POST['endereco_mec'];

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
	$query = $pdo->query("SELECT * FROM mecanicos where cpf = '$cpf' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0 ){
		echo 'O CPF já está Cadastrado!';
		exit();
	}

	$query = $pdo->prepare(" INSERT INTO mecanicos SET nome = :nome, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone ");
$res->bindValue(":nome, $nome");
$res->bindValue(":cpf, $cpf");
$res->bindValue(":email, $email");
$res->bindValue(":endereco, $endereco");
$res->bindValue(":telefone, $telefone");
 
 echo $total_reg
?>