<?php 
//salva na variavel $nome o conteudo que chega via post $_post do campo  'nome'
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$conteudo = utf8_decode('Nome: '. $nome . "\r\n" . "\r\n" . 'Email: '. $email . "\r\n" . "\r\n" . 'Mensagem: '. $mensagem . "\r\n" . "\r\n");

$c
?>