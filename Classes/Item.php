<?php

Class Item
{

	public $name;

	public $category;

	public $price;

	public $quantity;

	public function __construct(String $name, Category $category)
	{
		$this->name = $name;
		$this->category = $category;
		$this->price = rand(1,10);
		$this->quantity = rand(0,30);
	}

}