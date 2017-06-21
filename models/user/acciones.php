<?php 
	
	include '../load.php';

	if($_POST){

		$nombre   = $_POST['nombre'];
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$dependencia    = $_POST['dependencia'];

		$objeto = new user();
		$objeto->insertar($nombre, $email, $password, $dependencia);
	} 

		echo "
		<script>
			window.location.replace('index.php');	
		</script> ";
?>