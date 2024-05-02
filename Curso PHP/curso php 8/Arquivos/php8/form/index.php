<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Contatos</title>
</head>
<body>

	<div class="container">
		<form method="POST" action="enviar.php">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nome</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu Nome" name="nome">
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