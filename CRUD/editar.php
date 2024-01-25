
<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

<?php
require_once 'db_connection.php';


$id = $_GET["id"];

try {
    
    $sql = "SELECT * FROM usuarios WHERE id = ".$id;
    $result = $db->query($sql);
    $rows = $result->fetchAll();
} catch (PDOException $e) {
    die ("Erro ao atualizar dados dados: " . $e->getMessage());
}


?>

<div class="container">
<form method="post" action="atualiza.php">
id    <input type='text' name="id" readonly value="<?php echo $rows[0]['id']; ?> "/> </br>
Nome: <input type='text' name="nome" value="<?php echo $rows[0]['nome']; ?> "/> </br>
Email: <input type='text' name="email" value="<?php echo $rows[0]['email']; ?> "/> </br>
Sexo: <input type='text' name="sexo" value="<?php echo $rows[0]['sexo']; ?> "/> </br>
Data nascimento: <input type='text' name="dataNasc" value="<?php echo $rows[0]['dataNasc']; ?> "/> </br>
Cidade: <input type='text' name="cidade" value="<?php echo $rows[0]['cidade']; ?> "/> </br>
Estado: <input type='text' name="estado" value="<?php  echo $rows[0]['estado']; ?> "/> </br>
<input type="submit" value="Gravar"/> 
<a href="consultar.php"><input type="submit" value="Voltar"></a>
</form>
</div>