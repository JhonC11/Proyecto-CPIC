<?php 
	include 'models/db.php'; 


	$conx = Database::Conexion();
?>

<?php 
  $email   = $_POST["email"];
  $password = $_POST["password"];
   
  /* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
  el usuario que está intentando acceder */
  $administrador = mysqli_query($conx, "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' AND dependencia = 'Administrador'");
  $bienestar = mysqli_query($conx, "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' AND dependencia = 'Bienestar'");

		 $_SESSION['Administrador'] = "$email";
   
      /* Nos dirigimos al espacio de los administradors usando header que nos 
      redireccionará a la página que le indiquemos */
      // header("Location: index.php");
   
      /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
      seguir ejecutando código de este archivo */
      exit(); 
  