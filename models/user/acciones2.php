<?php 

	include '../load.php';;


	if($_POST){

		$id       = $_POST['id_usuario'];
		$nombre   = $_POST['nombre'];
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$dependencia    = $_POST['dependencia'];

		$objeto = new user();
		$objeto->modificar($id, $nombre, $email, $password, $dependencia);
	} 
	echo "
	 <script>
		  	window.location.replace('index.php');	
		 </script> ";

?>