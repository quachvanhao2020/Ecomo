<?php
namespace Ecomo;
use Ecomo\Storage\ActivitieStorage;
use Ecomo\Orders\Storage\OrderStorage;
use Ecomo\Products\Product;
use Ecomo\Money;

class HomeEcomo {
      /**
    * @var Money
    */
    public $sales;
      /**
    * @var OrderStorage
    */
    public $orders;
    /**
    * @var Product
    */
    public $product;
    /**
    * @var ActivitieStorage
    */
    public $activities;
}