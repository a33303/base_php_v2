<?php
require_once 'model/User.php';
session_start();
$pageHeader = 'Добро пожаловать!';

$username = null;  //Получаем текущего пользователя, если он залогинен
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
}

include "view/index.php";