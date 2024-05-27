<?php

require_once ("../../conexao.php");
@session_start();

//VERIFICAR SE O USUÁRIO LOGADO É UM ADMINISTRADOR
if (@$_SESSION['nivel_usuario'] != 'Administrador') {
  echo "<script language='javascript'>window.location='../index.php'</script>";
}

/*
echo 'Painel Administrativo <p>';
echo 'Nome do Usuário : ' . $_SESSION['nome_usuario'] .' e o nível do usuário é ' . $_SESSION['nivel_usuario'];

*/

?>

<!DOCTYPE html>
<html>

<head>
  <title>Painél Administrativo</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
            </ul>
          </li>

        </ul>
        <form method="GET" class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="txtBuscar">
          <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <a href="index.php?funcao=novo" class="btn btn-secondary mt-4" type="button" data-bs-toggle="modal" data-bs-target="#modalCadastrar" >Novo Usuário</a>

    <?php
    $txtBuscar = '%' . @$_GET['txtBuscar'] . '%';
    $query = $pdo->prepare("SELECT * FROM usuarios where nome LIKE :nome or email LIKE :email ");
    $query->bindValue(":email", $txtBuscar);
    $query->bindValue(":nome", $txtBuscar);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = @count($res);

    if ($total_reg > 0) {

      ?>

      <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Nível</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

          <?php

          for ($i = 0; $i < $total_reg; $i++) {
            foreach ($res[$i] as $key => $value) {

            }
            $nome = $res[$i]['nome'];
            $email = $res[$i]['email'];
            $senha = $res[$i]['senha'];
            $nivel = $res[$i]['nivel'];
            $id = $res[$i]['id'];

            ?>

            <tr>
              <td><?php echo $nome ?></td>
              <td><?php echo $email ?></td>
              <td><?php echo $senha ?></td>
              <td><?php echo $nivel ?></td>
              <td>
                <a href="index.php?funcao=editar&id=<?php echo $id ?>" title="Editar Registro" class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square text-primary" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </a>

                <a href="index.php?funcao=deletar&id=<?php echo $id ?>" title="Deletar Registro" class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive text-danger" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                  </svg>
                </a>
              </td>
            </tr>

          <?php
          }
    } else {
      echo '<p class="mt-4">Não existem dados para serem exibidos</p>';
    }

    ?>

      </tbody>
    </table>
  </div>

</body>
</html>

<div class="modal fade" id="modalCadastrar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
