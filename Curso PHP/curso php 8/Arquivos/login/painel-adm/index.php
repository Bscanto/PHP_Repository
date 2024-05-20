<?php 

@session_start();

//VERIFICAR SE TEM UM USUÁRIO LOGADO E SE ELE É ADMINISTRADOR
if(@$_SESSION['nivel_usuario'] != 'Administrador'){
  echo "<script language='javascript'>window.location='../index.php'</script>";
}
 

echo 'Painel Administrativo <p>';
echo 'Nome do Usuário: ' . $_SESSION['nome_usuario'] . ' e o nível do usuário é ' .  $_SESSION['nivel_usuario'];

?>

<a href="../logout.php">Sair</a>