<!DOCTYPE html>
<html lang=pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pegando dados Formulários</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <h1> Formulário</h1>
  <div class="formulario">
    <form method="GET" action="index.php">
      <p>Nome</p>
      <input type="text" name="Nome" value="String" placeholder="Nome" required>
      <br>
      <p>SobreNome</p>
      <input type="text" name="Sobre Nome" value="String" placeholder="SobreNome" required>
      <br>
      <button class="btn" >Enviar</button>

    </form>
  </div>
</body>

</html>