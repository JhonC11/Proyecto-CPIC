<?php 
/**
 * 
 */
 class Acceso 
 {
 	protected $email;
 	protected $password;

 	function __construct($email,$password)
 	{
 		$this->email = $email;
 		$this->password = $password;
 	}
 	
 	public function Login()
 	{
 		$db = new Conexion();
 		$db->query("SELECT email,password FROM usuarios WHERE email='$this->email' OR password='$this->password';");
 		$dato = $db->recorrer($sql);


 		if ($dato['email'] == $this->email and $dato['password'] == $this->password) {

 			session_start():
 			$_SESSION['email'] = $this->email;
 			header('location: ../../acceso.php');
 			else{
 			header('location: ../../index.php?error_datos_incorrectos');

 			}


 		 	
 		 } 
 	}
 	public function Registro()
 	{
 		
 	}
 	public function ClavePerdida()
 	{
 		
 	}
 } ?>