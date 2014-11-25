<?php

class BaseController {

  public $loader = '';
  public $twig = '';

  public function __construct() {
    $this->loader = new Twig_Loader_Filesystem(__DIR__ . '/../views/');
    $this->twig = new Twig_Environment($this->loader);
  }

}
