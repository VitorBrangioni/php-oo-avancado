<?php

use Pimple\Container;
use Source\ServiceProduct;

require_once '../vendor/autoload.php';
require_once 'config.php';
require_once 'service.php';


$list = $container['serviceProduct']->list();

require_once 'index-list.php';