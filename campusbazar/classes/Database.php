<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost:3307", "root", "teresa", "grocery");
		return $this->con;
	}
}

?>