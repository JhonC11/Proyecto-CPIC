
<?php  

	abstract class Database{

		public function Conexion() {

		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$ndb  = 'portafolio-cpic';
		$con  = null;
		$stm  = null;

			try {
		$conx = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
		$conx->exec('set names utf8');
		$conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conx;
		//echo "Se ha conectado a la base de datos";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
		}
	}
?>