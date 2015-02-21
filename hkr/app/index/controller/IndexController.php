<?php

/**
* 
*/
class IndexController extends Controller{
	public $default_view = "index";
	public $layout ;
	public $title = "IndexController";
	public $meta_charset = "";
	public $meta_description = "a";
	public $view_name = "";

	public function IndexController(){
		$this->layout = Layout::setLayout("layout-default");
	}

	public function indexView(){
		$this->title = "Mi titulo";

		Model::setSQL("select * from user");
		$this->usuarios = Model::getObjects();

		$this->view = View::setView("view-default");
	}

	public function otroView(){
		echo "Hola";
		$this->noLayout();
	}
}


?>