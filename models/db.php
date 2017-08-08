
<?php  

	abstract class Database{

		public function Conexion(){

			$conx = new mysqli('localhost','root','','portafolio-cpic');
			return $conx;
		}
	}
?>