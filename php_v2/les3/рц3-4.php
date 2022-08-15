<?php

$array = [];

while (count($array) < 100) {
    $randomNum = rand(1,200);

    if (!in_array($randomNum, $array)){
        $array[] = $randomNum;
    }
}

print_r($array);
