<?php
include("header.php");
// $id = $result['id_Uso'];
// var_dump($id);
$select = $pdo->query("SELECT * FROM usuarios");
?>
<div class="container">
	<div class="row">
		<div>
			<button type="button" id="add" onclick="abrirModalAdd()" class="btn_add btn btn-primary">Adicionar Usuário</button>
		</div>
		<table class="table table-hover" border="1">
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<!-- <th colspan="2">Ações</th> -->
			</tr>
			<?php
			 	while ($result = $select->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $result['nome'] ?></td>
					<td><?php echo $result['email'] ?></td>
					<td>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="btn_editar()">Editar</button>
						<button type="button" id="delet" onclick="excluirUsuario(<?php echo $result['id_Uso'] ?>)" class="btn btn-danger">Excluir</button>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
	<!-- modal editar -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div>Nome: <span id="nome"></span></div>
					<div>E-mail: <span id="email"></span></div>
				</div>
			</div>
		</div>
	</div>


	<script>
		function btn_editar(idUsu) {
			fetch('<?php echo URL_BASE; ?>api.php?idUsu=' + idUsu)
				.then((response) => response.json())
				.then((data) => {
					console.log(data)
					document.getElementById('nome').innerHTML = data.nome;
					document.getElementById('email').innerHTML = data.email;
				});

		}
	</script>



	<?php
	include("footer.php")
	?>

	<!-- <script>

		function abrirModal() {
		    $('#modal_edit').modal('show');
			if (modal.style.display === "none") {
				modal.style.display = "block";
			}
		}

		// //abrir modal
		// function abrirModal(modal1) {
		// 	modal = document.getElementById(id);
		// 	if (modal.style.display === "none") {
		// 		modal.style.display = "block";
		// 	}
		// }

		// // função fechar modal
		// function fecharModal(modal1) {
		// 	modal = document.getElementById(id);
		// 	if (modal.style.display = "block") {
		// 		modal.style.display = "none";
		// 	}
		// }
	</script> -->