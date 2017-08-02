// $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario AND pass = :password');
//     $statement->execute(array(':usuario' => $usuario, ':password' => $password));
//     $resultado = $statement->fetch();

//     if ($resultado !== false) {
//         $_SESSION['usuario'] = $usuario;
//         header('Location: index.php');
//     }else{
//         header('Location: ftitulada.php');

//     }


<?php  if($_SESSION['rol'] == 'administrador'): ?>
  <nav class="navbar navbar-default navbar-static-top">
		<div class="da">
			<a href="../index.php"><img src="../public/imgs/encabe1.png"></a>
		</div>
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
	</nav>

<?php endif; ?>


