<?php
use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=teste-oo";
$container['user'] = "root";
$container['pwd'] = "";