<?php
require("models/category.model.php");
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id)){
deleteCategory($id);
    header('Location:/categories');
}
