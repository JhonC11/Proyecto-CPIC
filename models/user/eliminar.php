<?php 
	include '../load.php';

	$id_usuario = $_GET['id'];
	$objeto = new user;
	$objeto->eliminar($id_usuario);

		echo "
		<script>
			window.location.replace('index.php');	
		</script> ";
 ?>