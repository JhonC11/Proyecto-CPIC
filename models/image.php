<?php 
	
	class image extends Database{

		public $mysqli;

		public function __construct(){
			$this->mysqli = parent::Conexion();
		}
		public function listarI(){
			$stmt = $this->mysqli->query("SELECT * FROM images");
			return $stmt;
		}
		public function insertarI($imagen){
			$stmt = $this->mysqli->query("INSERT INTO images VALUES(DEFAULT, '$imagen')");

		}
		public function eliminar($id){
			$stmt = $this->mysqli->query("DELETE FROM images WHERE id_image = '$id'");
		}
	}

 ?>