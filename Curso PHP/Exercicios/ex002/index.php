<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>exemplo de PHP</h1>

  <?php
  date_default_timezone_set("America/Sao_paulo");
  echo "Hoje é dia " . date("d/m/y");
  echo " e a hora é " . date("G:i:s");
  
  ?>

</body>

</html>