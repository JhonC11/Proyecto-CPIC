<?php
	if(isset($_SESSION['dependencia'])) {
		if($_SESSION['dependencia'] == 'administrador') {
			echo "<script>window.location.replace('views/admin/administrador.php');</script>";
		} else if($_SESSION['dependencia'] == 'cliente') {
			echo "<script>window.location.replace('views/bienestar/bienestar.php');</script>";
		}
	}