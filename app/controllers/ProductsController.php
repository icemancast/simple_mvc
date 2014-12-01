<?php

class ProductsController extends BaseController {

	public function get($product) {
		echo $product;
		// $data = [
  //     'page_title' => 'Lowman Market',
  //     'title' => 'Lowman Products',
  //     'products' => Product::products()
  //   ];
    echo $this->twig->render('home.html', $data);
	}

}