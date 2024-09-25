<?php

function merge(array $first, array $second) {
    // Соединяем массивы
    $merged = array_merge($first, $second);
    // убираем лишние дубликаты(если требуется)
    return array_unique($merged);
}
// first task
$arrayFirst = [1,1,2,3,4,5];
$arraySecond = [1,6,3,8];
$result = merge($arrayFirst, $arraySecond);
echo 'Результат: ' . implode(', ', $result);