<?php 
	
	include '../load.php';

	if($_POST){

		$nombres   = $_POST['nombres'];
		$apellidos   = $_POST['apellidos'];
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$dependencia    = $_POST['dependencia'];

		$objeto = new user();
		$objeto->insertar($nombres, $apellidos, $email, $password, $dependencia);
	} 

		echo "
		<script>
			window.location.replace('index.php');	
		</script> ";
?>