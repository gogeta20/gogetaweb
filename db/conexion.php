<?php

class ConexionPDO{

	function pdoConexion(){
		try {
			$conexion = new PDO("mysql:localhost=localhost;dbname=gogeta","root","");
			return $conexion;
		} catch (PDOExpection $e) {
			echo $e->getMessage();
			return false;
		}
		
	}

}

class ConexionMysql{

	function mysqlConexion(){
		$conexion = new Mysqli("localhost","root","","gogeta");
		if($conexion->connect_errno) return false;
		return $conexion;
	}

}

?>