<?php
namespace Source;

use Source\IConn;

class ServiceProduct {
	
	private $product;
	private $conn;

	public function __construct(IProduct $product, IConn $conn) {
		$this->product = $product;
		$this->conn = $conn;
	}
	
	public function list() {
		$sql = "SELECT * FROM products";
		$stmt = $this->conn->connection()
						   ->prepare($sql);
		
		$stmt->execute();
	
		return $stmt->fetchAll();
	}
	
	
}