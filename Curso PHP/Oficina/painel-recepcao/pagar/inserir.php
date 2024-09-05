<?php 
require_once("../../conexao.php"); 
@session_start();

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data_venc = $_POST['data_venc'];
$valor = str_replace(',', '.', $valor);
$fornecedor = $_POST['fornecedor'];

$id = $_POST['txtid2'];

if($valor == ""){
	echo 'Preencha o Valor';
	exit();
}

if($descricao == "" and $fornecedor == ""){
	echo 'Preencha o Fornecedor ou a Descrição';
	exit();
}

if($descricao == "" and $fornecedor != ""){
	$query = $pdo->query("SELECT * FROM fornecedores where id = '$fornecedor' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$nome_forn = $res[0]['nome'];
	$descricao = $nome_forn;
}


//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../img/contas/' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto2.jpg";
}else{
    $imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf'){ 
move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}



if($id == ""){
	$res = $pdo->prepare("INSERT INTO contas_pagar SET descricao = :descricao, valor = :valor, funcionario = :funcionario, data = curDate(), data_venc = :data_venc, pago = 'Não', imagem = '$imagem', fornecedor = '$fornecedor'");	

}else{
	if($imagem == "sem-foto.jpg"){
		$res = $pdo->prepare("UPDATE contas_pagar SET descricao = :descricao, valor = :valor, funcionario = :funcionario, data_venc = :data_venc, pago = 'Não', fornecedor = '$fornecedor' WHERE id = '$id'");
	}else{
	$res = $pdo->prepare("UPDATE contas_pagar SET descricao = :descricao, valor = :valor, funcionario = :funcionario, data_venc = :data_venc, pago = 'Não', imagem = '$imagem', fornecedor = '$fornecedor' WHERE id = '$id'");
	}
		
}

$res->bindValue(":descricao", $descricao);
$res->bindValue(":valor", $valor);
$res->bindValue(":funcionario", $_SESSION['cpf_usuario']);
$res->bindValue(":data_venc", $data_venc);
$res->execute();


echo 'Salvo com Sucesso!';

?>