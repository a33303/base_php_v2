<?php
// Заданик 1 готово

// Задание 2
$name = 'Саша';
$age = 32;
echo("Вас зовут $name, вам $age года»\n");

$name = readline("Привет, как тебя зовут?\n");
$age = readline("Сколько тебе лет?\n");
$dialog = readline("Как ваши дела?\n");
echo "Рад знакомству, $name!\n";

// Задание 3

$a = readline("Какая задача стоит перед вами сегодня?\n");
$b = readline("Сколько примерно времени эта задача займет?\n");
$c = readline("Какая вторая задача стоит перед вами сегодня?\n");
$d = readline("Сколько примерно времени эта задача займет?\n");
$f = readline("Какая третья задача стоит перед вами сегодня?\n");
$e = readline("Сколько примерно времени эта задача займет?\n");
$sumHours = $b + $d + $e;
echo "Иван, сегодня у вас запланировано 3 приоритетных задачи на день:
 - $a ($b ч),
 - $c ($d ч),
 - $f ($e ч),

Примерное время выполнения плана = ($sumHours ч)\n";