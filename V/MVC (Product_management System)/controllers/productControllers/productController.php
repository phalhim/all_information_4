<?php 
require_once("models/product.model.php");
$products=getProduct();
// var_dump($products);
require_once("views/productView/productView.php");

