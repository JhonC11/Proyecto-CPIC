<?php 
	include '../load.php';
 ?>
 <h1>Consultar Usuario</h1>
<hr>
<a href="index.php">Volver</a>
<?php

	$id_usuario = $_GET['id'];
	$objeto = new user;
	$datos  = $objeto->consultar($id_usuario);

?>

<?php foreach ($datos as $key => $value): ?>

<table border="1">
	<tr>
		<td>ID</td>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Email</td>
		<td>Dependencia</td>
	</tr>
	<tr>
		<td><?php echo $value['id_usuario']; ?></td>
		<td><?php echo $value['nombres']; ?></td>
		<td><?php echo $value['apellidos']; ?></td>
		<td><?php echo $value['email']; ?></td>
		<td><?php echo $value['dependencia']; ?></td>
	</tr>
</table>
	
<?php endforeach ?>
