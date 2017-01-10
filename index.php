<?php

require_once 'Container.php';
require_once 'Conn.php';
require_once 'IConn.php';
require_once 'Product.php';


$prd = Container::getProduct();
var_dump($prd->list());