<?php
$uri=parse_url($_SERVER['REQUEST_URI'])['path'];
$routes=[
    '/'=>"controllers/homeControllers/homeController.php",
    '/categories'=>"controllers/categoryControllers/categoryController.php",    //(/categories :  get from link a)
    '/categories/create'=>"controllers/categoryControllers/createCategory.controller.php",    //(/categories :  get from link a)
    '/categories/delete'=>"controllers/categoryControllers/deleteCategory.controller.php",    //(/categories :  get from link a)
    '/categories/edit'=>"controllers/categoryControllers/editCategory.controller.php",

    '/products'=>"controllers/productControllers/productController.php",
    '/products/delete'=>"controllers/productControllers/deleteProduct.controller.php",
    '/products/edit'=>"controllers/productControllers/editProduct.controller.php",
    '/products/create'=>"controllers/productControllers/createProduct.controller.php",
    

    
];
if(array_key_exists($uri,$routes)){
    require_once( $routes[$uri]);
}else{
    require_once("views/error/404.php");
}
?>