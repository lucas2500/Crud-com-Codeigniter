<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">

	input[type=text] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	body{

		overflow-x: hidden;
		overflow-y: scroll;

	}

</style> 
</head>

<body>
	<div class="well well-lg" align="center">
		<div class="container">

			<h2 align="center">Registros</h2>

			<br />

			<a href="/cadastro/index"><button type="text" class="btn btn-success">Voltar a tela de cadastro</button></a>

			<br />
			<br />

			<input type="text" id="pesquisarAluno" onkeyup="myFunction()" placeholder="Buscar aluno">

			<br />
			<br />

			<table class="table table-bordered" id="registros">

				<thead>	

					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Instituição</th>
						<th>Contato 1</th>
						<th>Contato 2</th>
						<th>Motivo da participação</th>
						<th>Apagar</th>
						<th>Editar</th>
					</tr>

				</thead>

				<tbody>

					<?php
					$contador = 0;
					foreach ($formularios as $formulario)
					{        
						echo '<tr>';
						echo '<td>'.$formulario->Nome.'</td>'; 
						echo '<td>'.$formulario->Email.'</td>'; 
						echo '<td>'.$formulario->IT.'</td>'; 
						echo '<td>'.$formulario->FONE1.'</td>';
						echo '<td>'.$formulario->FONE2.'</td>';
						echo '<td>'.$formulario->Motivo.'</td>';
						echo '<td><a href = "/cadastro/Delete/'.$formulario->ID.'" <button class = "btn btn-danger">Apagar</button></a>';
						echo  '<td><a href = "/cadastro/Editar/'.$formulario->ID.'"  <button class="btn btn-primary"">Editar</button></a>';
						echo '</td>'; 
						echo '</tr>';
						$contador++;
					}
					?>
				</tbody>
			</table>
			<div class="row" align="left">
				<div class="col-md-12">
					Total de Registros: <?php echo $contador ?>
				</div>
			</div>        
		</div>
	</div>



	<script>
		function myFunction() {
			var input, filter, table, tr, td, i;
			input = document.getElementById("pesquisarAluno");
			filter = input.value.toUpperCase();
			table = document.getElementById("registros");
			tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}       
			}
		}
	</script>	
</body>
</html>