<?php

require_once '../vendor/autoload.php';

function load_classes($class_name) {

	// Controller directory
	$controller = __DIR__ . '/controllers/' . $class_name . '.php';

	// Check for controller name for model static loading
  if(strpos($class_name, 'Controller')) {	
  	$model = __DIR__ . '/models/' . str_replace('Controller', '', $class_name) . '.php';
  } else {
  	$model = __DIR__ . '/models/' . $class_name . '.php';
  }

  // Load files if they exist
  if(file_exists($model)) {
    require_once $model;
  }

  if(file_exists($controller)) {
    require_once $controller;
  }
}

// Autolod the register
spl_autoload_register('load_classes');

// Load routes file
require_once 'routes.php';