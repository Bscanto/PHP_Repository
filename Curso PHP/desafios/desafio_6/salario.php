<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sálario mínimo</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $minimo = 1_412.00;
  $salario = $_GET['sal'] ?? 0;
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

      <label for="sal">Salario (R$)</label>
      <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">

      <p>Considerando o salário mínimo de <strong><?= number_format($minimo, 2, ",", ".") ?></strong></p>

      <input type="submit" value="Calcular">
      </h1>
    </form>
    <br>
    <section>
      <h2>Resultado Final</h2>
      <?php
      $total = (int)($salario / $minimo);
      $diferenca = $salario % $minimo;
      ?>
      <P>Quem recebe um salário de 
        <strong> <?= $salario ?></strong> 
        ganha <?= $total?> salário mínimos + R$ <?= $diferenca ?> reais.</P>
    </section>
  </main>
</body>

</html>