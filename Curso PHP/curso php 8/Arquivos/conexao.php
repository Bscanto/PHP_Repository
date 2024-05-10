<?php 

//DEFINIR DATA E HORA COM BASE NO LOCAL SELECIONADO
date_default_timezone_set('America/Sao_Paulo');


try {
	$pdo = new PDO("mysql:dbname=php8;host=localhost", "roott", "");

} catch (Exception $e){
  echo "Erro ao conectar com o banco de dados! <p>" . $e;
}

 ?>