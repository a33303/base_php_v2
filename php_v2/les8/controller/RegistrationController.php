<?php
require_once 'model/Model.php';
require_once "model/User.php";
require_once 'model/UserProvider.php';
$pdo = require 'db.php';

session_start();

$error = null;

if (isset($_POST['reg_name']) && isset($_POST['reg_username']) && isset($_POST['reg_password'])) {
    ['reg_name' => $reg_name, 'reg_username' => $reg_username, 'reg_password' => $reg_password] = $_POST;

    if ($reg_name < 30) {
        try {
            $user = new User(null, $reg_username);
            $user->setName($reg_name);
            $reg_user = new UserProvider($pdo);
            $user->setId($reg_user->registerUser($user, $reg_password));
            $_SESSION['user'] = $user;
            $_SESSION['id'] = $user->getId();
            header('Location: /');
            die();
        } catch (UserExistsException $exception) {
            $error = $exception->getMessage();  // работает, но не выдает ошибку, не понял как допилить до ума.
        }
    }
    if ($reg_name > 30) {
        $error = 'Длина превышает 30 символов';
    }


//    $user = new User(null, $reg_username);
//    $user->setName($reg_name);
//    $reg_user = new UserProvider($pdo);
//    $user->setId($reg_user->registerUser($user, $reg_password));
//
//    if ($reg_name > 30) {
//        $error = 'Длина превышает 30 символов';
//    } else {
//        $_SESSION['user'] = $user;
//        $_SESSION['id'] = $user->getId();
//        header('Location: /');
//        die();
//    }

}

require_once 'view/registration.php';
