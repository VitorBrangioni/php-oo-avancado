<?php

class Product {
	
	private $id;
	private $name;
	private $qtd;
	
	private $conn;
	
	public function __construct(PDO $conn) {
		$this->conn = $conn;
	}
	
	public function list() {
		$sql = "SELECT * FROM products";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		
		return $stmt->fetchAll();
	}
}