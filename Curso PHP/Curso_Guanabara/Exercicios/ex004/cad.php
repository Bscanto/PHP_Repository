<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>

  <main>
      <?php 
          $nome = $_GET["nome"] ?? "Sem nome";
          $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";
          print "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site.</p>";
      
      ?>

      <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>
