<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversao de moeda V2.0</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <main>
    <h1>Conversor de Moeda v2.0</h1>

    <?php

    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-09-2024\'&@dataFinalCotacao=\'02-16-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

      //valor em reais na carteira;
      $valor = $_POST["reais"];

      //conversao para dolar;
      $dolar = $valor / $cotacao;

      echo "<p>R\$" . number_format($valor, 2) . " reais equivalem a U\$" . number_format($dolar,2) . "dólares.</p>";
      
    echo "<p>cotacao de <strong>$cotacao</strong> informada diretamente do banco central.</p>";

    ?>
    <button onclick="javascript:window.location.href='./index.html'">&#x2B05; Voltar</button>
  </main>
</body>

</html>