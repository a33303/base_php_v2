<?php
// Задание 2

$name = readline("Привет, как тебя зовут?\n");
echo "Рад знакомству, $name!\n";

$task = (int)readline("$name, сколько запланировано у Вас дел?\n");

switch (true) {
    case $task > 5:
        echo "У Вас $name, загруженный день! \n";
        break;
    case $task <= 5:
        echo "У Вас $name, не сильно загруженный день! \n";
        break;
    case $task == 1:
        echo "У Вас $name, отличный день! \n";
        break;
}

// содержит все $answer
$allTask = [];

// содержит все $time
$allTime = [];

for ($i = 0; $i < $task; $i++) {
    $answer = readline("Какая задача стоит перед вами сегодня?\n");
    $time = (int)readline("Сколько примерно времени займет выполнение задачи?\n");
    switch (true) {
        case $time == 8:
            echo "Очень объемная задача и займет весь день\n";
            break;
        case $time > 8 && $time <= 16:
            echo "Мы рекомендуем не забыть про сон. Задача займет больше одного дня\n";
            break;
    }
    $result = "$answer, ({$time}ч)\n";
    $allTask[] = $result;
    $allTime[] = $time;
}

echo "$name, сегодня у вас запланировано $task дел(а) на день:\n";
foreach ($allTask as $key => $value) {
    echo "{$value}\n";
}

// сумирует все значения $time
$sumHours = array_sum($allTime);

echo "Примерное время выполнения плана = ({$sumHours}ч)\n";



