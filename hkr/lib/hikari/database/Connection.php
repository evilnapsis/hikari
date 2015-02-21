<?php
class Connection {

	public static $db;
	public static $con;
	function Connection(){
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="blogx";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getConnection(){
		if(self::$con==null && self::$db==null){
			self::$db = new Connection();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
