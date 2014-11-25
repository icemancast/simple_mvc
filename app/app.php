<?php

require_once '../vendor/autoload.php';

function load_classes($class_name) {
  $model = __DIR__ . '/models/' . str_replace('Controller', '', $class_name) . '.php';
  $controller = __DIR__ . '/controllers/' . $class_name . '.php';

  if(file_exists($model)) {
    require_once $model;
  }
  require_once $controller;
}

spl_autoload_register('load_classes');

// Load routes file
require_once 'routes.php';