<?php


use Pimple\Container;
use Source\Product;

require_once '../vendor/autoload.php';
require_once 'config.php';
require_once 'service.php';


$value = $container['product']->list();

var_dump($value);