<?php 
	include '../load.php';

	$id_image = $_GET['id'];
	$objeto = new image;
	$objeto->eliminar($id_image);

		echo "
		<script>
			window.location.replace('index.php');	
		</script> ";
 ?>