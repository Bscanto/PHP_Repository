<!DOCTYPE html>
<html lang=pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interacão Formulários</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <h1> Formulário</h1>
 <section class="formulario">
    <form action="cad.php" method="get"></form>
      <label for="nome">Nome</label>
      <br>
      <input type="text" name="Nome" id="idnome" placeholder="Nome" required>
     <br>
      
      <label for="sobrenome">Sobre Nome</label>
      <br>
      <input type="text" name="Sobre Nome" id="idsobrenome" placeholder="SobreNome" required>
      <br>
      
     <input type="submit" value="Enviar">

    </form>
    </section>
</body>

</html>