<?php

require_once "data/product.php";
//use Data\Product;

$product = new Product("Apple", 50000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 30000);
echo $dummy->info();
?>