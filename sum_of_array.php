<?php

$nums = [
    10,
    100,
    25
];

$sum = 0;

foreach ($nums as $num)
{
    $sum += $num;
}

echo $sum;