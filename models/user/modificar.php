<?php
	include '../load.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">

</head>
<body>
 <h1>Consultar Usuario</h1>
<hr>
<a href="index.php">Volver</a>

<?php

	$id_usuario = $_GET['id'];
	$objeto = new user;
	$datos = $objeto->consultar($id_usuario);
?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
		<?php foreach ($datos as $key => $value): ?>
			<form class="form-group" action="acciones2.php" method="post">
				<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
				<div class="form-group">
					<label>Nombre</label>
					<input  class="form-control" value="<?php echo $value['nombre']; ?>"  type="text" name="nombre" placeholder="Digite su nombre" required>			
				</div>
				<div class="form-group">
					
				<label>Email</label>
				<input class="form-control" value="<?php echo $value['email']; ?>"   type="email" name="email" placeholder="Digite su email" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" value="<?php echo $value['password']; ?>"   type="password" name="password" placeholder="Digite su password" required>			
				</div>
				<div class="form-group">
					<label>Dependencia</label>
					<select  class="form-control"  name="dependencia" placeholder="holi" required>
						<option value="">--Seleccione una dependencia--</option>
						<option <?php if ($value['dependencia'] == 'Administración') echo "selected='selected'"; ?> value="">Administrador</option>
						<option <?php if ($value['dependencia'] == 'Bienestar') echo "selected='selected'"; ?> value="Bienestar">Bienestar</option>
					</select>			
				</div>

				<div class="form-group">
					<input type="submit"><input type="reset">		
				</div>

			</form>
			<?php endforeach ?>
		</div>
	</div>
<script src="../../public/js/jquery-3.1.1.js"></script>

<script src="../../public/js/bootstrap.min.js"></script> 

</body>
</html>
