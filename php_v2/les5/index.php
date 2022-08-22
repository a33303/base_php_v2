<?php

require "User.php";
require "Task.php";
require "Comment.php";
require "TaskService.php";

$user = new User('Sasha', 'a@a.ru', '32');
$task = new Task($user, 'Покушать', '1');

TaskService::addComment($user, $task, 'Было вкуснО!');

echo "Пользователь: " . $user->getUsername() . PHP_EOL;

foreach ($task->getComments() as $comment){
    echo "Задача: " . $comment->getTask()->getDescription() . ", ";
    echo "Комментарий: " . $comment->getText() . PHP_EOL;

}


