<?php

// ----function for first task----
function merge(array $first, array $second) {
    // Соединяем массивы
    $merged = array_merge($first, $second);
    // убираем лишние дубликаты(если требуется)
    return array_unique($merged);
}

// ----function's for second task----
// Числа фибоначчи первых чисел длинной $n рекурсивно
function fibonacciFirstN($n) {
    if ($n < 0) {
        return "Число должно быть неотрицательным";
    } elseif ($n === 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return fibonacciFirstN($n - 1) + fibonacciFirstN($n - 2);
    }
}

// вывод
function fibonacciPrintFirstN($n) {
    $fibonacci = [];
    for ($i = 0; $i < $n; $i++) {
        $fibonacci[] = fibonacciFirstN($i);
    }

    echo "Первые числа Фибоначчи в длинной <b>{$n}</b>: " . implode(', ', $fibonacci) . '<br>';
}

// Фибоначчи до числа $n рекурсивно
function fibonacciUpToN($current, $next, $n, &$sequence) {
    if ($current > $n) {
        return;
    }
    $sequence[] = $current;
    fibonacciUpToN($next, $current + $next, $n, $sequence);
}

// вывод
function fibonacciPrintUpToN($n) {
    $sequence = [];
    fibonacciUpToN(0, 1, $n, $sequence);
    echo "Числа Фибоначчи до числа <b>{$n}</b>: " . implode(', ', $sequence) . "<br>";
}

// factorial рекурсия
function factorial($n) {
    if ($n < 0) {
        return "Введите неотрицательное число";
    } elseif ($n === 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// ----Переменные----
// Для первого задания
$arrayFirst = [1,1,2,3,4,5];
$arraySecond = [1,6,3,8];
$result = merge($arrayFirst, $arraySecond);

// Для второго задания
$n = 3;

// ----Вывод----
// 1 задание
echo '<b>Задание первое:</b>' . "<br>";
echo 'Массив первый: ' . implode(', ', $arrayFirst) . '<br>';
echo 'Массив второй: ' . implode(', ', $arraySecond) . '<br>';
echo 'Результат: ' . implode(', ', $result) . '<br>';
echo "<br>";

// 2 задание
echo '<b>Задание второе:</b>' . "<br>";
// Вывод "Числа фибоначчи первых чисел $n рекурсивно"
fibonacciPrintFirstN($n);

// Вывод "фибоначчи до числа $n рекурсивно"
fibonacciPrintUpToN($n);

// вывод "факторил рекурсивно"
echo "Факторил числа <b>$n</b>: " . factorial($n);
