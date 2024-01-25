<?php
require_once 'db_connection.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$dataNascimento = $_POST['dataNasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

try {
    $sql = "INSERT INTO usuarios (nome, email, sexo, dataNasc, cidade, estado) VALUES (:nome, :email, :sexo, :dataNasc, :cidade, :estado)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':dataNasc', $dataNasc);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':estado', $estado);
    $stmt->execute();
?>

<script>

alert("Dados Atualizados  com Sucesso!");
window.location.href = "index.php";
</script>

    <?php
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>
