<?php 
//salva na variavel $nome o conteudo que chega via post $_post do campo  'nome'
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = 'Email do Site';
$remetente = 'contato@hugocursos.com.br';

$conteudo = 'Nome: ' .$nome ."\r\n"."\r\n" .'Email: ' .$email ."\r\n"."\r\n"."\r\n" .'Mensagem: ' .$mensagem ."\r\n"."\r\n";

$cabecalhos = "From: ".$email;

mail($remetente, $assunto, $conteudo, $cabecalhos);

 ?>
<script>alert('Enviado com Sucesso');</script>
<meta http-equiv="refresh" content="0; url=index.php">