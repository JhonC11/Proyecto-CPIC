<?php  

	abstract class Database{

		public function connection(){

			$conx = new mysqli('localhost','root','','Portafolio-CPIC');
			return $conx;
		}
	}
?>