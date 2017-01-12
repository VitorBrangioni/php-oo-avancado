<?php

namespace Source;

require_once 'IProduct.php';

class Product implements IProduct{
	
	private $id;
	private $name;
	private $qtd;
	
	
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