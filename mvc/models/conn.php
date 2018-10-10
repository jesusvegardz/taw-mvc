<?php 
	include 'config.php';
	/**
	* clase de conexion
	*/
	class Conexion {
		
		public function conectar() {
			$host = DB_SERVER;
			$dbname = DB_DATABASE;
			$dbOtp = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"); // caracteres con encoding utf8
			$pdoObj = new PDO(
				"mysql:host={$host};dbname={$dbname}; port=3306", DB_USER, DB_PASSWORD, $dbOtp);
			return $pdoObj;
		}
	}

?>