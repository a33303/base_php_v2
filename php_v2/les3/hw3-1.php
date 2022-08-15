<?php

$array1 = range(1, 10);
$array2 = range(1,10);

$array3=[];

for ($i = 0; $i < count($array1); $i++) {
    $array3 = $array1[$i] * $array2[$i];
}

print_r($array3);
