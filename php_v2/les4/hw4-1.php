<?php

$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$number = function ($array) : ?string {
    return $array;
};

$AllNumber = [];

foreach ($array as $item) {
        if ($item % 2 == 0) {
            $AllNumber[] = $item . " - четное\n";
        } else {
            $AllNumber[] = $item . " - нечетное\n";
        }
}

$result = array_map($number, $AllNumber);
var_dump($result);
print_r($result);

