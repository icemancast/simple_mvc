<?php

require_once 'BaseController.php';

class HomeController extends BaseController {

  function get() {

    $data = [
      'page_title' => 'Lowman Market',
      'title' => 'Lowman Products',
      'products' => Product::products()
    ];
    echo $this->twig->render('home.html', $data);
  }

}
