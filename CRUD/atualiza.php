<?php
//print_r($_POST);
// Recebe os dados do formulário via POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$dataNasc = $_POST['dataNasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// Conecta ao banco de dados
require_once 'db_connection.php';

try {
     // Prepara a consulta SQL para atualizar os dados do usuário
    $sql = "UPDATE usuarios SET nome = :nome, 
                                email = :email,
                                sexo = :sexo,
                                dataNasc = :dataNasc,
                                cidade = :cidade,
                                estado = :estado
                                 WHERE id = :id";
     $stmt = $db->prepare($sql);

     // Substitui os parâmetros na consulta pelos valores recebidos do formulário
     $stmt->bindParam(":id", $id);
     $stmt->bindParam(':nome', $nome);
     $stmt->bindParam(':email', $email);
     $stmt->bindParam(':sexo', $sexo);
     $stmt->bindParam(':dataNasc', $dataNasc);
     $stmt->bindParam(':cidade', $cidade);
     $stmt->bindParam(':estado', $estado);

     // Executa a consulta para atualizar os dados no banco de dados
    $stmt->execute();
     ?>

<!-- Exibe um alerta e redireciona para a página de consulta após a atualização -->
    <script>

        alert("Dados Atualizados  com Sucesso!");
        window.location.href = "consulta.php";
        </script>

     
<?php
 } catch (PDOException $e) {
     // Em caso de erro, exibe uma mensagem de erro
     echo "Erro ao inserir dados: " . $e->getMessage();
 }
?>