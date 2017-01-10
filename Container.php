<?php

class Container {
	
	public static function getConn() {
		$conn = new Conn("mysql:host=localhost;dbname=teste-oo", "root", "");
		return $conn->connection();
	}
	
	public static function getProduct() {
		
		return new Product(Container::getConn());
	}
	
}