<?php

$nums = [
    10,
    100,
    25
];

$result = 0;

foreach ($nums as $num)
{
    $result += $num;
}

echo $result;