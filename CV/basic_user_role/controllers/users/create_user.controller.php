<?php
session_start();
require '../../database/database.php';
require '../../models/user.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imgProfile = $_FILES['image'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (!empty($name) && !empty($email) && !empty($password)) {
        $encryptPassword = password_hash($password, PASSWORD_BCRYPT);

        // Image upload
        $directory = "../../assets/profiles/";
        $target_file = $directory .'.'.basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $checkImageSize = getimagesize($_FILES["image"]["tmp_name"]);
        if ($checkImageSize) {
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $_SESSION['error'] = "Wrong Image extension!";
                header('Location: /signup');
            } else {

                $imageExtension = explode('.', $target_file)[6];
                $newFileName = uniqid();
                $nameInDirectory = $directory .$newFileName.'.'.$imageExtension;
                $nameInDB = $newFileName.'.'.$imageExtension;
                move_uploaded_file($_FILES["image"]["tmp_name"], $nameInDirectory);
                $user = accountExist($email);
                if(count($user) == 0) {
                    createAccount($name, $email, $encryptPassword,$nameInDB);
                    header('Location: /signin');
                    $_SESSION['success'] = "Account successfully created";
                } else {
                    $_SESSION['error'] = "Account already exists";
                    header('Location: /signup');
                }
            }
        } else {
            $_SESSION['error'] = "Not Image file!";
            header('Location: /signup');
        }

       
    } else {
        $_SESSION['error'] = "Please fill all the fields";
        header('Location: /signup');
    }
}



