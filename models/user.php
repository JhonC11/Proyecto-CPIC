<?php  

	class user extends Database{

		public $mysqli;

		public function __construct(){

			$this->mysqli = parent::Conexion();
		}

		public function Listar(){

			$stmt = $this->mysqli->query("SELECT * FROM usuarios");
			return $stmt;
		}
		public function consultar($id){

			$stmt = $this->mysqli->query("SELECT * FROM usuarios WHERE id_usuario = $id");
			return $stmt;
		}		
		public function insertar($nombre, $email, $password, $dependencia){
			$stmt = $this->mysqli->query("INSERT INTO usuarios VALUES('', '$nombre','$email','$password','$dependencia')");
		}
		public function modificar($id, $nombre, $email, $password, $dependencia){
			$stmt = $this->mysqli->query("UPDATE usuarios SET nombre = '$nombre', email = '$email',password = '$password', dependencia = '$dependencia' WHERE id_usuario = '$id'");
		}		
		public function eliminar($id){
			$stmt = $this->mysqli->query("DELETE FROM usuarios WHERE id_usuario = '$id'");
		}		
	}
?>