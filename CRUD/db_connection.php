<?php
$host = "localhost";
$dbname = "tutorial";
$username = "root"; // substituir aqui pelo seu
$password = ""; // substituir aqui pelo seu

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o Banco de Dados:" . $e->getMessage());
}

?>