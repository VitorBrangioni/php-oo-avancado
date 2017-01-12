<?php

namespace Source;

class Product {
	
	private $id;
	private $name;
	private $qtd;
	
	private $conn;
	
	public function __construct($conn) {
		$this->conn = $conn->connection();
	}
	
	public function list() {
		$sql = "SELECT * FROM products";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		
		return $stmt->fetchAll();
	}

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getQtd(){
        return $this->qtd;
    }

    public function setQtd($qtd){
        $this->qtd = $qtd;
        return $this;
    }

}