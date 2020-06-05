<?php

require_once('Category.php');
require_once('Item.php');

require_once('Config/items.php');


Class Store
{

	public $items = [];

	public $categories = [];

	public function __construct ()
	{
		$this->createStock();
	}

	private function createStock()
	{
		$cpt = 0;
		foreach ($_items as $key => $value) {
			var_dump($key, $value);
			$this->categories[$cpt] = new Category($key);
			foreach ($value as $item) {
				$this->items[] = new Item($item, $categories[$cpt]);
			}
			$cpt++;
		}
	}

}