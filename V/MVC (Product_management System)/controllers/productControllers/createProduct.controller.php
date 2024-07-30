<?php
require("models/product.model.php");
$error="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // var_dump($_POST);
    echo $_POST["category"];
    if(!empty($_POST['product'])){
        createProduct($_POST['product'],$_POST['category']);
    }else{
        $error="Feild cannot be empty,Please enter product name";
    }
}
$products=getProduct();
// require("viewa/productView/productView.php");