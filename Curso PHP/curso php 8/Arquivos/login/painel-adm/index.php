<?php 

@session_start();

//VERIFICAR SE TEM UM USUÁRIO LOGADO E SE ELE É ADMINISTRADOR
if(@$_SESSION['nivel_usuario'] != 'Administrador'){
  echo "<script language='javascript'>window.location='../index.php'</script>";
}
 
/*
echo 'Painel Administrativo <p>';
echo 'Nome do Usuário: ' . $_SESSION['nome_usuario'] . ' e o nível do usuário é ' .  $_SESSION['nivel_usuario'];
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel Administrativo</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Administrador</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sair
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="#"><?php echo $_SESSION['nome_usuario'] ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
          </ul>
        </li>
        
      </ul>
      <form method="GET" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" name="txtBusca" >
        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<button class="btn btn-secondary mt-4" type="button">Novo Usuário</button>

<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Nível</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>

</div>
  
</body>
</html>

