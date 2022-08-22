<?php

class TaskService
{
    public static function addComment(User $author, Task $task, $text): void
    {
        $task->setComments(new Comment($author, $task, $text));
    }

}