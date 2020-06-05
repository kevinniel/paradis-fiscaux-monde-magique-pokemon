<?php

require_once('Store.php');

Class City
{
	public $name;

	public $store;

	public function __construct($name)
	{
		$this->name = $name;
		$this->store = new Store();
	}
}