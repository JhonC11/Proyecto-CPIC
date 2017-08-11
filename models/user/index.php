<?php 
include '../load.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<style>

		nav.navbar{
			background-color: #fff;
		}
		div.da{
			display: inline-block;
		}

	</style>
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
	</nav>
		<h1 class="text-center">Dashboard</h1>
		<hr>

		<?php 

		$objeto = new user();
		$objetos = $objeto->Listar();

		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<a href="registrar.php" class=" btn btn-default"><i class="glyphicon glyphicon-plus"></i>  Adicionar</a>



				<br>
				<br>
				<table class="table table-bordered text-center">
					<tr>
						<td><strong>Nombre</strong></td>
						<td><strong>Dependencia</strong></td>
						<td><strong>Acciones</strong></td>
					</tr>
					<?php foreach ($objetos as $key => $value): ?>
						<tr>
							<td><?php echo $value['nombres'];?></td>
							<td><?php echo $value['dependencia'];?></td>
							<td>
								<a class="btn btn-default" href="consultar.php?id=<?php echo $value['id_usuario']?>"><i class="glyphicon glyphicon-search"></i></a>
								<a class="btn btn-success" href="modificar.php?id=<?php echo $value['id_usuario']?>"><i class="glyphicon glyphicon-pencil"></i></a>
								<a class="btn btn-danger" href="eliminar.php?id=<?php echo $value['id_usuario']?>"><i class="glyphicon glyphicon-trash"></i> </a>
							</td>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
		<script src="../../public/js/jquery-3.1.1.js"></script>

		<script src="../../public/js/bootstrap.min.js"></script> 

	</body>
	</html>