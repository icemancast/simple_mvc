<?php

Toro::serve(array(
  '/' => 'HomeController',
  '/products/:product' => 'ProductsController',
));
