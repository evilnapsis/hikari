<?php 
/**
* 
*/
class Hikari
{
	public static $name;
	public $cfg;

	public function Hikari($name){
		$this->name = $name;
		Registry::set("appname",$name);
	}


	public function init(){
		$this->cfg = simplexml_load_file("app/".$this->name."/config.xml");
		include "app/".$this->name."/config.php";
	}
	public function run(){
		//include "app/".$this->name."/init.php";
		$using_r_form=false;
		$module = Module::getDefault();

		if(isset($_GET["r"]) && $_GET["r"]!=""){
			$rdata = split("/", $_GET["r"]);
			if($rdata[0]!="" && $rdata[1]!=""){
				$using_r_form=true;
				$module = Module::load($rdata[0]);
				$view = $rdata[1];
			}
		}
		/// lets load the module
		if(!$using_r_form&&isset($_GET["module"])&&$_GET["module"]!=""){
				$module = Module::load($_GET["module"]);
			}
//			print_r($module);
		///
		$controller = null;
		if($module!=null){
			include "app/".$this->name."/controller/".$module["controller"].".php";
			$controller = new $module["controller"];
			$controller->appname = $this->name;
		}

		if($controller!=null){
			if(!$using_r_form){
						if(!isset($_GET["view"])){
							$view = $controller->default_view;
						}else{
							$view = $_GET["view"];
						}
					}




			// si existe el metodo
			if(method_exists($controller, $view."View")){
				call_user_method($view."View", $controller);
				$controller->view_name=$view;
				$controller->renderLayout();
			}else{
				print "method not found";
				exit();
				echo "mm";
			}

		}else{
			print "Controller not found";
		}
	}
	
}
 ?>