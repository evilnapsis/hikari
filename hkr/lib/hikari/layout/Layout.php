<?php
class Layout {

	public function Layout(){}

	public function setLayout($name){
		return "app/".Registry::get("appname")."/layout/".$name.".php";
	}

	
}
?>