<?php

$array = [1,2,3,4,5,0,0,0,0,0];

for ($i = 4; $i >= 0; $i --){
    $array[$i * 2 + 1] = $array[$i * 2] = $array[$i];
}
print_r($array);