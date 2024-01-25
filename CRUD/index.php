
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados no Banco de Dados</title>
   
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">



  
</head>
<body>
<section>


</section>


<div class="container">
    <h1 class="formulario" >Formulário</h1>

    <div>
    <form method="post" action="inserir_dados.php" >
        <label class="nome" for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <br>
        <br>

        <label class="email" for="email">Email:</label>
        <input  type="email" name="email" id="email" placeholder="seu email@.com.br" required>
        <br>
        <br>

        <label class="sexo" for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
        <br>
        <br>

        <label class="data" for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="dataNasc" id="data_nascimento" required>
        <br>
        <br>

        <label class="cidade" for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade" required>
        <br>
        <br>

        <label class="estado" for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" placeholder="Estado" required>
        <br>
        <br>

        
        <input class="btnInserir" type="submit" value="Inserir Dados">
      
    </form>
<br>
<br>

   <a  href="consulta.php"><input class="btnConsultar" type="submit" value="consultar"></a>

   </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js">
  
</script>
</html>