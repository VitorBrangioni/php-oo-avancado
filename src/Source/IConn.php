<?php

namespace Source;

interface  IConn {
	public function connection(): \PDO;
}