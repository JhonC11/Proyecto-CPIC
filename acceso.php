<?php 

session_start();

if (!isset($_SESSION['email'])) {
	echo "Has iniciado sesion ",$_SESSION['email'];
}
else {
	session_start();
	session_destroy();
	header('location: index.php?error=acceso');
 ?>}
