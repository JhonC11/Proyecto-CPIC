<?php 
	include 'models/db.php'; 


	$conx = Database::Conexion();


  
function login($conx, $email, $password) {
    try {
      $sql = "SELECT *
          FROM usuarios
          WHERE email = :email
          AND password = :password
          LIMIT 1";
      $stm = $conx->prepare($sql);
      $stm->bindparam(':email', $email);
      $stm->bindparam(':password', $password);
      $stm->execute();
      if($stm->rowCount() > 0) {
        $urow = $stm->fetch(PDO::FETCH_ASSOC);
        $_SESSION['uid_usuario']      =  $urow['id_usuario'];
        $_SESSION['unombre']          =  $urow['nombre'];
        $_SESSION['udependencia']     =  $urow['dependencia'];
        return true;
      } else {
        return false;
      } 
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }


  