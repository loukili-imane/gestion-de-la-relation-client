<?php

require_once "config.php";
require_once "functions.php";
require_once "database.php";
require_once "controller.php";
require_once "model.php";
require_once "app.php";

spl_autoload_register(function($class_name){
	//echo "hello from autoload";
	$class_name=rtrim($class_name, 's');
	//echo $class_name;
	require_once "../private/models/".$class_name.".php";
	//echo "after";
});

?>
