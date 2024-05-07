<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <title>Formulário</title>
</head>

<body>
  <div class="container">
    <form method="POST" action="enviar.php">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu nome" name="nome">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem"></textarea>
      </div>

      <input type="submit" class="btn btn-primary" id="exampleFormControlInput1" value="Enviar">

    </form>
  </div>
</body>
</html>