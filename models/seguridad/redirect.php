<?php
	if(isset($_SESSION['dependencia'])) {
		if($_SESSION['dependencia'] == 'administrador') {
			echo "<script>window.location.replace('administrador.php');</script>";
		} else if($_SESSION['dependencia'] == 'cliente') {
			echo "<script>window.location.replace('cliente.php');</script>";
		}
	}