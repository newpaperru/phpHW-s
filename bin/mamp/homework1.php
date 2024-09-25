<?php

function merge(array $first, array $second) {
    return array_merge($first, $second);
}
// first task
$arrayFirst = [1,1,2,3,4,5];
$arraySecond = [1,6,3,8];
$result = merge($arrayFirst, $arraySecond);
echo 'Результат: ' . implode(', ', $result);