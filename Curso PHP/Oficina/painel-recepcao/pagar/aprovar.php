<?php 
require_once("../../conexao.php"); 
@session_start();
$id = $_POST['id'];

$pdo->query("UPDATE contas_pagar SET pago = 'Sim' WHERE id = '$id'");

//LANÇA NAS MOVIMENTAÇÕES
$query = $pdo->query("SELECT * FROM contas_pagar where id = '$id' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$descricao = $res[0]['descricao'];
$valor = $res[0]['valor'];

$pdo->query("INSERT INTO movimentacoes SET tipo = 'Saída', descricao = '$descricao', valor = '$valor', funcionario = '$_SESSION[cpf_usuario]', data = curDate()");

echo 'Aprovado com Sucesso!';

?>