<?php
require_once("database/database.php");
function getCategory()
{
    global $db;
    $categories = $db->prepare("SELECT * FROM category");
    $categories->execute();
    return $categories->fetchAll();
};


function createCategory($catName){
    global $db;
    $statement=$db->prepare("INSERT INTO category(catName) values (:catName)");
    $statement->execute(
        [':catName'=>$catName]
    );
    return $statement->rowCount()>0;

}

function deleteCategory($id){
    global $db;
    $statement=$db->prepare("DELETE FROM category where cat_id=:catId");
    $statement->execute([
        ':catId'=>$id,
    ]);
    return $statement->rowCount() > 0;
}


function editCategory($username,$id){
    global $db;
    $statement=$db->prepare("UPDATE category SET  catName=:catname WHERE cat_id=:id");
    $statement->execute([
        ':id'=>$id,
        ':catname'=>$username,
    ]);
    return $statement->rowCount()>0;
}