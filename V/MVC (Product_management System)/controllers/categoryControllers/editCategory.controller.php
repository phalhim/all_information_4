<?php
require("models/category.model.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['category'])){
        editCategory(($_POST['category']),($_POST['id']));
}
header('Location:/categories');
}
