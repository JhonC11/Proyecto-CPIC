<?php 
	if(!isset($_SESSION['dependencia'])) {
		echo "<script>";
		echo "alert('Acceso Denegado!');";
		echo "window.location.replace('index.php');";
		echo "</script>";
	} else {
		if($_SESSION['dependencia'] == 'bienestar') {
			echo "<script>";
			echo "alert('Acceso Denegado!');";
			echo "window.location.replace('index.php');";
			echo "</script>";
		}
	}