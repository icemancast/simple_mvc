<?php

class Product {

  public static function products() {

    return [
      [
        'title' => 'First One',
        'images' => [
          'someimage.jpg',
          '2ndimage.jpg'
        ],
        'description' => 'lorem ipsum dolor'
      ],

      [
        'title' => 'second One',
        'images' => [
          'someimage.jpg',
          '2ndimage.jpg'
        ],
        'description' => 'lorem ipsum dolor'
      ]
    ];

  }

}
