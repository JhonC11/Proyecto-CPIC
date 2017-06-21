<?php 
	include '../load.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
</head>

<body>
	<h1>Usuarios</h1>
	<hr>
	<a href="registrar.php">Adicionar</a>
	<?php 

		$objeto = new user();
		$objetos = $objeto->Listar();

	 ?>
	<table border="1">
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
</body>
</html>