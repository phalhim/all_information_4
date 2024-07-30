<?php
require_once '../../database/database.php';
require_once '../../models/user.model.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    //call from input  
    $name = htmlspecialchars ($_POST['name']);
    $email = htmlspecialchars ($_POST['email']);
    $password = htmlspecialchars ($_POST['password']);
    // show result
    echo $name. '<br>' .$email .'<br>'. $password;

    //unit password
    $encryptPassword = password_hash($password, PASSWORD_BCRYPT);

    $isCreateed = createAccount($name, $email, $encryptPassword);
    if($isCreateed){
        header('location: /form');
    }else{
        echo "Something went worng";
    }

}