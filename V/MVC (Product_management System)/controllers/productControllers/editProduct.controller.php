<?php
require("models/product.model.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['product'])){
        editProduct($_POST['product'],$_POST['id']);
    }
    header('location:/products');
}
