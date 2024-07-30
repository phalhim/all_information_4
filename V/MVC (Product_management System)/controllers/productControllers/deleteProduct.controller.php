<?php
require("./models/product.model.php");
$id=$_GET['id']?$_GET['id']:null;
if(isset($id)){
    deletePro($id);
    header('location:/products');
}