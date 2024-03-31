<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Divisao </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $dividendo = $_GET['d1'] ?? 0;
  $divisor = $_GET['d2'] ?? 1;
  ?>

  <main>
    <h1>Anatommia de uma Divisão</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="d1">dividendo</label>
      <input type="number" name="d1" id="d1" min="0" value="<?= $dividendo ?>">

      <label for="d2">Divisor</label>
      <input type="number" name="d2" id="d2" min="1" value="<?= $divisor ?>">

      <input type="submit" value="Somar">
    </form>
  </main>

  <section id="resultado ">
    <h2>Estrutura da divisao</h2>
<table>
  <th> 
  
  </th>
</table>
    <?php 
    //Calculos 
    $quociente = (int) ($dividendo / $divisor);
    $resto = $dividendo % $divisor;
    ?>


    <table class="divisao">
      <tr>
        <td><?= $dividendo ?></td>
        <td><?= $divisor ?></td>
      </tr>

      <tr>
        <td><?= $resto ?></td>
        <td><?= $quociente ?></td>
      </tr>
    </table>

  </section>

</body>

</html>