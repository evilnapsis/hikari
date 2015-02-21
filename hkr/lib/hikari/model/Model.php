<?php

/**
* 
*/
class Model
{
	public static $sql;
	public static function select($name=""){

		$con = Connection::getConnection();

	}
	public static function setSQL($sql){
		self::$sql=$sql;

	}

	public static function run(){
		$con = Connection::getConnection();
		return $con->query(self::$sql);
	}

	public static function getArray(){
		$con = Connection::getConnection();
		$data = array();
		$query = $con->query(self::$sql);
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
		return $data;
	}

	public static function getObjects(){
		$con = Connection::getConnection();
		$data = array();
		$query = $con->query(self::$sql);
		while ($r=$query->fetch_object()) {
			$data[]=$r;
		}
		return $data;
	}

}


?>