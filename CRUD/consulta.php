<?php
// Conecta ao banco de dados
require_once 'db_connection.php';


// Verifica se foi recebido um filtro via POST
    if(isset( $_POST['filtro'])){
        $filtro = $_POST['filtro'];
    }
    else{
        $filtro = "falso";
    }


try {
    // Constrói a consulta SQL com base no filtro
    if( $filtro =="falso"){
    $sql = "SELECT * FROM usuarios";
} 
else{
    $sql = 'SELECT * FROM usuarios where nome like '. "'$filtro%'";
}


    $result = $db->query($sql);
    $rows = $result->fetchAll();
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Inserir Dados no Banco de Dados</title>
<div class="container">
    <script>
        function confirmar(id){

            if (confirm("tem certeza que deseja excluir?")){
                window.location.href = "deletar.php?id=" + id ;

            }else{
                return false;
            }
        }

</script>
</head>

<body>

<form method="post" action="#">
    Filtrar<input type="text" name="filtro"/>
    <input type="submit" value="Filtrar"/>
    <br><br>

    


</form>

    <table border="1">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Data_Nascimento</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <?php
        foreach ($rows as $row) {
        ?>

            <tr>
                <td> <?php echo $row['id'] .  '<br/>'; ?> </td>
                <td> <?php echo $row['nome'] .  '<br/>'; ?> </td>
                <td> <?php echo $row['email'] .  '<br/>'; ?> </td>
                <td> <?php echo $row['sexo'] .  '<br/>'; ?> </td>
                <td> <?php echo $row['dataNasc'] .  '<br/>'; ?> </td>
                <td> <?php echo $row['cidade'] .  '<br/>'; ?> </td>
                <td> <?php echo $row['estado'] .  '<br/>'; ?> </td>
                <td><a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a></td>
                <td><a href="#" onclick="confirmar(<?php echo $row['id'] ; ?>);"> Excluir  </a></td>
            </tr>
        <?php
        }
        ?>

    </table>

    <br>
    <a href="index.php"><input type="submit" value="Voltar"></a>

    </div>
</body>

</html>