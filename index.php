<?php

require_once('./Classes/City.php');
require_once('./Classes/Category.php');
require_once('./Classes/Item.php');
require_once('./Classes/Store.php');

require_once('./Config/cities.php');
require_once('./Config/items.php');

// création de tous les objets de type "ville" en fonction de la liste du fichier de config.
$cities = [];
foreach ($_cities as $_city) {
	$cities[] = new City($_city);
}
// création de tous les objets de type "categorie" en fonction de la liste du fichier de config.
// création de nos objets
// $categories = [];
// $items = [];
// $cpt = 0;
// foreach ($_items as $key => $value) {
// 	$categories[$cpt] = new Category($key);
// 	foreach ($value as $item) {
// 		$items[] = new Item($item, $categories[$cpt]);
// 	}
// 	$cpt++;
// }

$s = new Store("test");

echo('<pre>');
echo('<code>');
var_dump($s);
echo('</code>');
echo('</pre>');