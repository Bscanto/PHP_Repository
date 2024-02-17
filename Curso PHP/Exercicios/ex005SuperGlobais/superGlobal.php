<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super Globais</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <pre>
      <?php

      session_start();
      $_SESSION["teste"] = "Funcionou!";

      setcookie("dia-da-semana", "Segunda", time() + 3600);

      echo "<h1>Superglobal GET</h1>";
      echo "";
      var_dump($_GET);

      echo "<h1>Superglobal POST</h1>";
      var_dump($_POST);

      echo "<h1>Superglobal REQUEST</h1>";
      var_dump($_REQUEST);

      echo "<h1>Superglobal COOKIE</h1>";
      var_dump($_COOKIE);

      echo "<h1>Superglobal SESSION</h1>";
      var_dump($_SESSION);

      echo "<h1>Superglobal ENV</h1>";
      var_dump($_ENV);
      foreach (getenv() as $c => $v) {
        echo "<br> $c -> $v <br>";
      }



      ?>
    </pre>
  </main>

</body>

</html>