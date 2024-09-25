<?php

// first task
$arrayFirst = [1,1,2,3,4,5];
$arraySecond = [1,6,3,8];
$result = array_merge($arrayFirst, $arraySecond);
echo 'Результат: ' . implode(', ', $result);