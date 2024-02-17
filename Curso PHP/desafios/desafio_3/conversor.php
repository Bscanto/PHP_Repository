<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de moeda v2.0</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
 

  <main>
  <h1>Conversor de Moeda v2.0</h1>

      <?php 
          // cotacao dolar;
          $convercao = 4.97;

          //valor em reais na carteira;
          $valor = $_GET["reais"];

          //conversao para dolar;
          $dolar = $valor / $convercao;

          echo "<p>R\$" . number_format($valor, 2) . " reais equivalem a U\$" . number_format($dolar,2) . "dólares.</p>";
          echo  "<p>cotacao fixa de <strong>$convercao</strong> informada diretamente no código.</p>" ;

          ?>

<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>
