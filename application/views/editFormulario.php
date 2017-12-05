<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>

<body>


	<div class="well well-lg" align="center">

		<form action="/cadastro/Salvar" method="post">
			<div align="left">
				<label for="exampleInputEmail1">Nome</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="Nome"  placeholder="Nome completo" required="" value="<?php echo $formularios->Nome ?>">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Email</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="Email"  placeholder="Digite seu email" required="" value="<?php echo $formularios->Email ?>">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Nome da instituição</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="IT"  placeholder="Nome da sua faculdade" required="" value="<?php echo $formularios->IT ?>">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Telefone 1</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="FONE1"  placeholder="Contato 1" required="" value="<?php echo $formularios->FONE1 ?>">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Telefone 2</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="FONE2"  placeholder="Contato 2" required="" value="<?php echo $formularios->FONE2 ?>">
			</div>
			<div align="center">
			<input type="hidden" name="ID" value="<?php echo $formularios->ID ?>">
				<button type="submit" class="btn btn-success">Atualizar</button>
			</div>

		</form>



	</div>	
</body>
</html>