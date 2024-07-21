<?php 
require_once("conexao.php");

$email = $_POST['email'];
$senha  = $_POST['senha'];

$query = $pdo->query("SELECT * FROM usuarios where email = '$email' and senha = '$senha' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
  if($total_reg > 0){
    
    $nivel = $res[0]['nivel'];
    if($nivel == 'admin'){
      echo "<script language='javascript'> window.location='painel-adm' </script> ";
    }

    if($nivel == 'mecanico'){
      echo "<script language='javascript'> window.location='painel-mecanico' </script> ";
    }
    
    if($nivel == 'recep'){
      echo "<script language='javascript'> window.location='painel-recepcao' </script> ";
    }

  }else{
    echo "<script language='javascript'> window.alert('Usuário ou Senha Incorreta!') </script> ";
    echo "<script language='javascript'> window.location='index.php' </script> ";   
  }



?>