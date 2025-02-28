<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Número aleatorio</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
 

  <main>
  <h1>Gerando números aleatórios</h1>

      <?php 
          $min = 0;
          $max = 100;

          $numero = rand($min, $max);
          

          echo "Gerando um número aleatorio entre $min e $max..." . "\n";
          echo  "<p>O valor gerado foi  <strong>$numero</strong>.</p> " . "\n";

          ?>

      <button onclick="javascript:document.location.reload()">&#x1f504; Gerar outro número </button>
    </main>
</body>
</html>
