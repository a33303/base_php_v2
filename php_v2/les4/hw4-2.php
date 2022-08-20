<?php

$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 5, 2];
$number = [];

function number($array, $number) : int {
    foreach ($array as $item) {
        if ($item == max($array)){
            $number[] = $item; //самое большое число
        } elseif ($item == min($array)){
            $number[] = $item; //самое маленькое число
        }
    }
    $avg = array_sum($array);
    $countArray = count($array);
    $number[] = $avg / $countArray; // среднее арифмитическое
    return $number;
}

print_r(number($array, $number));
