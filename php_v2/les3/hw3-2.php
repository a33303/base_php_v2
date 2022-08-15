<?php

$array1 = ['здоровья', 'счастья', 'удачи', 'успехов', 'любьви'];
$array2 = ['бесконечной', 'крепкой', 'космической', 'нереальной', 'классной'];

$name = readline('Введите имя именника или именниницы: ');

$congratulations = [];
$num = 5;

shuffle($array1);
shuffle($array2);

for ($i = 0; $i < $num; $i++){
    $congratulations[] = $array1[$i] . ' ' . $array2[$i];
}

$endText = array_pop($congratulations);
$congratulations[] = 'и ' . $endText;
$allText = implode(', ', $congratulations);

echo "$name, Поздравляем тебя с Днем Рожденья, желаем $allText!\n";
