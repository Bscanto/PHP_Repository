<!DOCTYPE html>
<html lang=pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interacão Formulários</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <h1> Apresente-se para nós!</h1>
  <section class="formulario">
    <form action="cad.php" method="get"></form>
    <label for="nome">Nome</label>
    <input type="text" name="Nome" id="idnome" placeholder="Nome" required>

    <label for="sobrenome">Sobre Nome</label>
    <input type="text" name="Sobre Nome" id="idsobrenome" placeholder="SobreNome" required>

    <input class="btn" type="submit" value="Enviar">

    </form>
  </section>
</body>

</html>