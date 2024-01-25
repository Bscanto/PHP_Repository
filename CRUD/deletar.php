<?php

require_once('db_connection.php');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM usuarios WHERE id = :id";
     $stmt = $db->prepare($sql);
     $stmt->bindParam(":id", $id);
     $stmt->execute();
?>
     <script>

        alert("Dados Atualizados  com Sucesso!");
        window.location.href = "consulta.php";
        </script>

<?php
    } catch (PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
   ?>