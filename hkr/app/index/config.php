<?php

/// configurations

// modules

$modules = array(
	"index"=>array("name"=>"index","controller"=>"IndexController"),
	"post"=>array("name"=>"post","controller"=>"PostController")
	);

Module::setModules($modules);

?>