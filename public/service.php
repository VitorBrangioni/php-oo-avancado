<?php

$container['conn'] = function($c) {
	return new Source\Conn($c['dsn'], $c['user'], $c['pwd']);
};

$container['product'] = function($c) {
	return new Source\Product($c['conn']);
};
