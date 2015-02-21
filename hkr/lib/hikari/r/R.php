<?php

/**
* class R
* @brief tareas relacionadas con la obtencion y generacion de links
*/
class R
{
	public static function rlink($array_data){
		/// array format
		/// array("base"=>"index.php","module"=>"","view"=>"");
		$has_base=false;
		$base="";
		$has_module = false;
		$module="";
		$has_view = false;
		$view="";

		foreach ($array_data as $key => $value) {
			if($key=="b"){$has_base=true; $base=$value;}
			else if($key=="m"){$has_module=true;$module=$value;}
			else if($key=="v"){$has_view=true;$view=$value;}
		}

		if($has_base&&$has_module&&$has_view){
			return $base."?r=".$module."/".$view;
		}

		return "";
	}
}
?>
