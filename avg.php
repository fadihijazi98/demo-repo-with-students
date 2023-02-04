<?php

$marks = [
    90,
    80,
    85,
    95,
    55
];

$sum = 0;
$avg = 0;

foreach ($marks as $mark)
{
    $sum += $mark;
}

$avg = $sum / sizeof($marks);
