<?php
class View {

	public function View(){}

	public function setView($name){
		return "app/".Registry::get("appname")."/modules/index/view/index/".$name.".php";
	}

	
}
?>