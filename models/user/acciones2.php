<?php 

	include '../load.php';;


	if($_POST){

		$id       = $_POST['id_usuario'];
		$nombres   = $_POST['nombres'];
		$apellidos   = $_POST['apellidos'];
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$dependencia    = $_POST['dependencia'];

		$objeto = new user();
		$objeto->modificar($id, $nombres, $apellidos, $email, $password, $dependencia);
	} 
	echo "
	 <script>
		  	window.location.replace('index.php');	
		 </script> ";

?>