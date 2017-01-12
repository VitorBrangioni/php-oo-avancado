<?php

namespace Source;
require_once 'IConn.php';

class Conn implements IConn {
	
	private $user;
	private $pwd;
	private $dsn;
	
	public function __construct($dsn, $user, $pwd) {
		$this->dsn = $dsn;
		$this->user = $user;
		$this->pwd = $pwd;
	}
	public function connection(): \PDO {
		return new \PDO($this->dsn, $this->user, $this->pwd);
	}
}