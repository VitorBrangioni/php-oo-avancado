<?php

$container['conn'] = function($c) {
	return new Source\Conn($c['dsn'], $c['user'], $c['pwd']);
};

$container['product'] = function() {
	return new Source\Product();
};

$container['serviceProduct'] = function ($c) {
	return new Source\ServiceProduct($c['product'], $c['conn']);
}

?>