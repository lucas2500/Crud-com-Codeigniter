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

	<div align="center">
		<h1>Formulário de inscrição do projeto</h1>
		<a href="/cadastro/Ver"><button type="button" class="btn btn-success" style="margin-bottom: 1%;">Ver registros</button></a>
	</div>

	<div class="well well-lg" align="center">
		<form action="/cadastro/Salvar" method="post">
			<div align="left">
				<label for="exampleInputEmail1">Nome </label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="Nome"  placeholder="Nome completo" required="">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Email</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="Email"  placeholder="Digite seu email" required="">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Nome da instituição</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="IT"  placeholder="Nome da sua faculdade" required="">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Telefone 1</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="FONE1"  placeholder="Contato 1" required="">
			</div>
			<div align="left">
				<label for="exampleInputEmail1">Telefone 2</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" name="FONE2"  placeholder="Contato 2" required="">
			</div>
			<div class="form-group">
				<label for="comment">Descreva em poucas linhas o que lhe motivou a partipar do projeto:</label>
				<textarea class="form-control" rows="5" id="comment" name="Motivo"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Enviar</button>
		</form>
	</div>	
</body>
</html>