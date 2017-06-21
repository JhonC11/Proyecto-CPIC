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
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
		
			<form class="form-group" action="acciones.php" method="post">
				<div>
					<label>Nombre</label>
					<input  class="form-control" type="text" name="nombre" placeholder="Digite su nombre" required>			
				</div>
				<div>
					
				<label>Email</label>
				<input class="form-control"  type="email" name="email" placeholder="Digite su email" required>
				</div>
				<div>
					<label>Password</label>
					<input class="form-control"  type="password" name="password" placeholder="Digite su password" required>			
				</div>
				<div>
					<label>clase</label>
					<select  class="form-control"  name="dependencia" placeholder="holi" required>
						<option value="">--Seleccione una dependencia--</option>
						<option value="Administración">Administración</option>
						<option value="Bienestar">Bienestar</option>
					</select>			
				</div>

				<div>
					<input type="submit"><input type="reset">			
				</div>

			</form>
		</div>
	</div>
<script src="../../public/js/jquery-3.1.1.js"></script>

<script src="../../public/js/bootstrap.min.js"></script> 

</body>
</html>