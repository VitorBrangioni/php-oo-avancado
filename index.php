<?php

require_once 'Conn.php';
require_once 'IConn.php';
require_once 'Product.php';

$conn = new Conn("mysql:host=localhost;dbname=teste-oo", "root", "rotiv9401v");

$prd = new Product($conn);
var_dump($prd->list());