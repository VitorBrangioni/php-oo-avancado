<?php

namespace Source;

interface IProduct {
	
	public function getId();
	
	public function setId($id);
	
	public function getName();
	
	public function setName($name);
	
	public function getQtd();
	
	public function setQtd($qtd);
}