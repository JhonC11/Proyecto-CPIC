<?php  
	
	class User extends Database{

		public $mysqli;

		public function __construct(){

			$this->mysqli = parent::connection();		
		}

		public function listar(){

			$variable = $this->mysqli->query("SELECT * FROM usuarios");
			return $variable;
		}

		public function consultar($id){

			$variable = $this->mysqli->query("SELECT * FROM usuarios WHERE id_usuario = $id");
			return $variable;
		}

		public function insertar($nombre, $email, $password, $clase){
			$variable = $this->mysqli->query("INSERT INTO usuarios VALUES('', '$nombre','$email','$password','$clase')");
		}

		public function modificar($id, $nombre, $email, $password, $clase){
			$variable = $this->mysqli->query("UPDATE usuarios SET nombre = '$nombre', email = '$email',password = '$password', clase = '$clase' WHERE id_usuario = '$id'");
		}

		public function eliminar($id){
			$variable = $this->mysqli->query("DELETE FROM usuarios WHERE id_usuario = '$id'");
		}
	}

?>