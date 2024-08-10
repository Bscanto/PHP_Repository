<?php 
@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
	echo "<script language='javascript'> window.location='../index.php' </script>";
}

$pag = "produtos";
require_once("../conexao.php"); 



?>

<div class="row mt-4 mb-4">
	<a type="button" class="btn-secondary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Novo Produto</a>
	<a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>

</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Categoria</th>
						<th>Fornecedor</th>
						<th>Valor Compra</th>
						<th>Valor Venda</th>
						<th>Estoque</th>
						<th>Imagem</th>
						<th>Ações</th>
					</tr>
				</thead>

				<tbody>

					<?php 

					$query = $pdo->query("SELECT * FROM produtos order by id desc ");
					$res = $query->fetchAll(PDO::FETCH_ASSOC);
					
					for ($i=0; $i < @count($res); $i++) { 
						foreach ($res[$i] as $key => $value) {
						}
						$nome = $res[$i]['nome'];
						$categoria = $res[$i]['categoria'];
						$fornecedor = $res[$i]['fornecedor'];
						$valor_compra = $res[$i]['valor_compra'];
						$valor_venda = $res[$i]['valor_venda'];
						$estoque = $res[$i]['estoque'];
						$descricao = $res[$i]['descricao'];
						$imagem = $res[$i]['imagem'];
						$id = $res[$i]['id'];

						if($estoque < $nivel_estoque){
							$cor = "text-danger";
						}else{
							$cor = "";
						}

						$valor_compra = number_format($valor_compra, 2, ',', '.');
						$valor_venda = number_format($valor_venda, 2, ',', '.');

						$query_cat = $pdo->query("SELECT * FROM categorias where id = '$categoria' ");
						$res_cat = $query_cat->fetchAll(PDO::FETCH_ASSOC);
						$nome_cate = $res_cat[0]['nome'];

						$query_forn = $pdo->query("SELECT * FROM fornecedores where id = '$fornecedor' ");
						$res_forn = $query_forn->fetchAll(PDO::FETCH_ASSOC);
						$nome_forn = $res_forn[0]['nome'];

						?>

						<tr>
							<td><?php echo $nome ?></td>
							<td><?php echo $nome_cate ?></td>
							<td>
								<a class="" title="Ver Dados do Fornecedor" href="index.php?pag=<?php echo $pag ?>&funcao=forn&id=<?php echo $fornecedor ?>">
									<?php echo $nome_forn ?>
								</a>
							</td>
							<td>R$ <?php echo $valor_compra ?></td>
							<td>R$ <?php echo $valor_venda ?></td>
							<td><span class="<?php echo $cor ?>"><?php echo $estoque ?></span></td>
							<td><img src="../img/produtos/<?php echo $imagem ?>" width="50" ></td>

							<td>
								<a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Dados'><i class='far fa-edit'></i></a>

								<a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>

								<a href="" onclick="mostrarDescricao('<?php echo $descricao ?>', '<?php echo $imagem ?>')" class='text-primary mr-1' title='Descrição do Produto'><i class='fas fa-info-circle'></i></a>
							</td>
						</tr>
					<?php } ?>





				</tbody>
			</table>
		</div>
	</div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<?php 
				if (@$_GET['funcao'] == 'editar') {
					$titulo = "Editar Registro";
					$id2 = $_GET['id'];

					$query = $pdo->query("SELECT * FROM produtos where id = '$id2' ");
					$res = $query->fetchAll(PDO::FETCH_ASSOC);
					$nome2 = $res[0]['nome'];
					$categoria2 = $res[0]['categoria'];
					$fornecedor2 = $res[0]['fornecedor'];
					$valor_compra2 = $res[0]['valor_compra'];
					$valor_venda2 = $res[0]['valor_venda'];
					$estoque2 = $res[0]['estoque'];
					$descricao2 = $res[0]['descricao'];
					$imagem2 = $res[0]['imagem'];


				} else {
					$titulo = "Inserir Registro";

				}


				?>

				<h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form" method="POST">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label >Nome</label>
								<input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome_reg" name="nome_reg" placeholder="Nome">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label >Categoria</label>
								<select name="categoria" class="form-control" id="categoria">

									<?php 

									$query = $pdo->query("SELECT * FROM categorias order by nome asc ");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);

									for ($i=0; $i < @count($res); $i++) { 
										foreach ($res[$i] as $key => $value) {
										}
										$nome_reg = $res[$i]['nome'];
										$id_reg = $res[$i]['id'];
										?>									
										<option <?php if(@$categoria2 == $id_reg){ ?> selected <?php } ?> value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
									<?php } ?>
									
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label >Fornecedores</label>
								<select name="fornecedor" class="form-control" id="fornecedor">

									<?php 

									$query = $pdo->query("SELECT * FROM fornecedores order by nome asc ");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									
									for ($i=0; $i < @count($res); $i++) { 
										foreach ($res[$i] as $key => $value) {
										}
										$nome_reg = $res[$i]['nome'];
										$id_reg = $res[$i]['id'];
										?>									
										<option <?php if(@$fornecedor2 == $id_reg){ ?> selected <?php } ?> value="<?php echo $id_reg ?>"><?php echo $nome_reg ?></option>
									<?php } ?>
									
								</select>
							</div>
						</div>
					</div>

					

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label >Valor Compra</label>
								<input value="<?php echo @$valor_compra2 ?>" type="text" class="form-control" id="valor_compra" name="valor_compra" placeholder="Valor da Compra">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label >Valor Venda</label>
								<input value="<?php echo @$valor_venda2 ?>" type="text" class="form-control" id="valor_venda" name="valor_venda" placeholder="Valor da Venda">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label >Estoque</label>
								<input value="<?php echo @$estoque2 ?>" type="number" class="form-control" id="estoque" name="estoque" placeholder="Estoque">
							</div>
						</div>
					</div>

					
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label >Descrição</label>
								<textarea class="form-control" id="descricao" name="descricao"><?php echo $descricao2 ?></textarea> 
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label >Imagem</label>
								<input type="file" value="<?php echo @$imagem2 ?>"  class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
							</div>

							<?php if(@$imagem2 != ""){ ?>
								<img src="../img/produtos/<?php echo $imagem2 ?>" width="100" height="100" id="target">
							<?php  }else{ ?>
								<img src="../img/produtos/sem-foto.jpg" width="100" height="100" id="target">
							<?php } ?>
						</div>
						
					</div>

					


					<small>
						<div id="mensagem">

						</div>
					</small> 

				</div>



				<div class="modal-footer">



					<input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
					<input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">
					

					<button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>






<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Excluir Registro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<p>Deseja realmente Excluir este Registro?</p>

				<div align="center" id="mensagem_excluir" class="">

				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
				<form method="post">

					<input type="hidden" id="id"  name="id" value="<?php echo @$_GET['id'] ?>" required>

					<button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
				</form>
			</div>
		</div>
	</div>
</div>





//MODAL PARA DESCRIÇÃO DOS PRODUTOS 
<div class="modal" id="modal-descricao" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Descrição do Produto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class="col-md-6">
						<img src="" width="100%" id="imagemDescricao">
					</div>

					<div class="col-md-6">
						<span id="spanDescricao"></span>
					</div>
				</div>

				


			</div>
			
		</div>
	</div>
</div>



//MODAL PARA FORNECEDORES
<div class="modal" id="modal-forn" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Dados do Fornecedor</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<?php 
				if (@$_GET['funcao'] == 'forn') {
					
					$id2 = $_GET['id'];

					$query = $pdo->query("SELECT * FROM fornecedores where id = '$id2' ");
					$res = $query->fetchAll(PDO::FETCH_ASSOC);
					$nome3 = $res[0]['nome'];
					$cpf3 = $res[0]['cpf'];
					$telefone3 = $res[0]['telefone'];
					$email3 = $res[0]['email'];
					$endereco3 = $res[0]['endereco'];
					
				} 


				?>

				<span><b>Nome: </b> <i><?php echo $nome3 ?></i><br>
				<span><b>Telefone: </b> <i><?php echo $telefone3 ?></i> <span class="ml-4"><b>CPF: </b> <i><?php echo $cpf3 ?></i><br>
				<span><b>Email: </b> <i><?php echo $email3 ?><br>
				<span><b>Endereço: </b> <i><?php echo $endereco3 ?><br>

			</div>
			
		</div>
	</div>
</div>





<?php 

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
	echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
	echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
	echo "<script>$('#modal-deletar').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "forn") {
	echo "<script>$('#modal-forn').modal('show');</script>";
}

?>




<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM OU SEM IMAGEM -->
<script type="text/javascript">
	$("#form").submit(function () {
		var pag = "<?=$pag?>";
		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: pag + "/inserir.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso!") {
                    //$('#nome').val('');
                    $('#btn-fechar').click();
                    window.location = "index.php?pag="+pag;
                } else {
                	$('#mensagem').addClass('text-danger')
                }
                $('#mensagem').text(mensagem)
            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function () {  // Custom XMLHttpRequest
            	var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                	myXhr.upload.addEventListener('progress', function () {
                		/* faz alguma coisa durante o progresso do upload */
                	}, false);
                }
                return myXhr;
            }
        });
	});
</script>





<!--AJAX PARA EXCLUSÃO DOS DADOS -->
<script type="text/javascript">
	$(document).ready(function () {
		var pag = "<?=$pag?>";
		$('#btn-deletar').click(function (event) {
			event.preventDefault();
			$.ajax({
				url: pag + "/excluir.php",
				method: "post",
				data: $('form').serialize(),
				dataType: "text",
				success: function (mensagem) {

					if (mensagem.trim() === 'Excluído com Sucesso!') {
						$('#btn-cancelar-excluir').click();
						window.location = "index.php?pag=" + pag;
					}
					$('#mensagem_excluir').text(mensagem)

				},

			})
		})
	})
</script>



<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">

	function carregarImg() {

		var target = document.getElementById('target');
		var file = document.querySelector("input[type=file]").files[0];
		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);


		} else {
			target.src = "";
		}
	}

</script>





<script type="text/javascript">
	$(document).ready(function () {
		$('#dataTable').dataTable({
			"ordering": false
		})

	});
</script>



//script para informacao descricao 
<script type="text/javascript">

	function mostrarDescricao(descricao, imagem) {
		event.preventDefault();
		$('#spanDescricao').text(descricao);
		$('#imagemDescricao').attr('src', "../img/produtos/" + imagem);
		$('#modal-descricao').modal('show');
	}

</script>