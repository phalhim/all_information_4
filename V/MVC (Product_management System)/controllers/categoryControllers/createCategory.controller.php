<?php
require ("models/category.model.php");
$error="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['category'])){
        createCategory(($_POST['category']));
    }else{
        $error="Feild canot be empty, Please enter category name!"; 

        
    }
}
$categories=getCategory();
require("views/categoryView/categoryView.php");
// die();
// header('location:/categories');