<?php 
	include '../load.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Usuarios</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/css/master.css">

</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="da">
			<img src="../../public/imgs/encabe1.png" alt="">
		</div>
		<div class="da">
			<ul class="nav navbar-nav nabvar-right">
            <li class="">
              <a href="../../index.php">Pagina</a>
            </li>
            <li>
              <a href="index.php">Usuarios</a>
            </li>
          </ul>
		</div>
	<h1>Dashboard Usuarios</h1>
	<hr>
	<button class="btn btn-default">
		
		<i class="glyphicon glyphicon-plus"></i><a href="registrar.php">Adicionar</a>
	</button>
	<?php 

		$objeto = new user();
		$objetos = $objeto->Listar();

	 ?>
	<table class="table">
		<tr>
			<td>Nombre</td>
			<td>Dependencia</td>
			<td>CRUD</td>
		</tr>
	<?php foreach ($objetos as $key => $value): ?>
		<tr>
			<td><?php echo $value['nombre'];?></td>
			<td><?php echo $value['dependencia'];?></td>
			<td>
				<a href="consultar.php?id=<?php echo $value['id_usuario']?>">Consultar</a>
				<a href="modificar.php?id=<?php echo $value['id_usuario']?>">Modificar</a>
				<a href="eliminar.php?id=<?php echo $value['id_usuario']?>">Eliminar</a>
			</td>
		</tr>
	<?php endforeach ?>
	</table>
<script src="../../public/js/jquery-3.1.1.js"></script>

<script src="../../public/js/bootstrap.min.js"></script> 

</body>
</html>