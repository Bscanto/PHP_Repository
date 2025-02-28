<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>

  <main>
      <?php 
          $numero = $_GET["numero"] ?? "0";
          $antecessor = $numero -1;
          $sucessor = $numero + 1;

          echo "<p>O número escolhido foi  <strong>$numero</strong>.</p> " . "\n";
          echo  "<p>O seu antecessor de $numero é <strong>$antecessor</strong>.</p> " . "\n";
          echo  "<p>O seu sucessor de $numero é <strong>$sucessor</strong>.</p> " . "\n";
      ?>

      <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>
