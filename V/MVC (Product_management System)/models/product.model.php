<?php
require_once("database/database.php");
function getProduct()
{
    global $db;
    $products = $db->prepare("SELECT product.pro_id, product.proName,category.catName FROM product LEFT JOIN category ON category.cat_id=product.cat_id");
    $products->execute();
    return $products->fetchAll();
}

function deletePro($id){
    global $db;
    $statement=$db->prepare("DELETE FROM product where pro_id=:id");
    $statement->execute([
        ':id'=>$id
    ]);
    return $statement->rowCount();

}

function createProduct($proname,$cat_id){
    global $db;
    $statement=$db->prepare("INSERT INTO product (proName,cat_id) values(:proName,:cat_id)");
    $statement->execute(
        [":proName"=>$proname,
        ":cat_id"=>$cat_id]
    );
    return $statement->rowCount() > 0;
}

function editProduct($name,$id){
    global $db;
    $statement=$db->prepare("UPDATE product SET proName=:proName WHERE pro_id=:id");
    $statement->execute(
        [":proName"=>$name,
        ":id"=>$id]
    );
    $statement->rowCount();
}