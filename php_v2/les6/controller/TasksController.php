<?php
include_once "model/Task.php";
include_once "model/TaskProvider.php";
include_once "model/User.php";

session_start();

$pageHeader = "Задачи";
$username = null;
$taskProvider = new TaskProvider();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: /");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key);
    header("Location: /?controller=tasks");
    die();
}

$tasks = $taskProvider->getUndoneList();
include "view/tasks.php";