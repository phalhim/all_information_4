<?php 
require_once("models/category.model.php");
$categories=getCategory();
require_once("views/categoryView/categoryView.php");