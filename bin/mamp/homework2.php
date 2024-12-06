<?php

// Задача 1
// Массив высоких температур
$highTemps = array(
    68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 
    73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 
    68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);

// Вычисление средней температуры
$sum = array_sum($highTemps);
$count = count($highTemps);
$average = $sum / $count;

// Пять самых теплых температур
$sortedDesc = $highTemps;
rsort($sortedDesc); // Сортировка по убыванию
$topFive = array_slice($sortedDesc, 0, 5);

// Пять самых низких температур
$sortedAsc = $highTemps;
sort($sortedAsc); // Сортировка по возрастанию
$bottomFive = array_slice($sortedAsc, 0, 5);

// Вывод результатов
echo "<h2>Анализ высоких температур</h2>";
echo "<p>Средняя высокая температура: " . number_format($average, 2) . "°F</p>";

echo "<h3>Пять самых теплых температур:</h3>";
echo "<ul>";
foreach ($topFive as $temp) {
    echo "<li>" . $temp . "°С</li>";
}
echo "</ul>";

echo "<h3>Пять самых низких температур:</h3>";
echo "<ul>";
foreach ($bottomFive as $temp) {
    echo "<li>" . $temp . "°С</li>";
}
echo "</ul>";

// Задача 2
echo "<h2>Очистка форматирования</h2>";
$phoneFormatted = "+7 (900) 000-00-00";

// 1. Удаление всех символов, кроме цифр
$phoneDigits = preg_replace("/\D/", "", $phoneFormatted);

// 2. Проверка и замена префикса
if (substr($phoneDigits, 0, 1) !== '7') {
    // Если номер начинается не с '7', выполняем дополнительные действия
    $phoneDigits = '7' . $phoneDigits;
}

echo "<p>Оригинальный номер: " . htmlspecialchars($phoneFormatted) . "</p>";
echo "<p>Очищенный номер: " . $phoneDigits . "</p>";

// Задача 3
echo "<h2>Получение последних значений URL</h2>";
$url = 'http://www.wm-school.ru/7478639';

// Используем parse_url для извлечения пути
$path = parse_url($url, PHP_URL_PATH);

// Используем basename для получения последней части пути
$lastSegment = basename($path);

echo "<p>URL: " . htmlspecialchars($url) . "</p>";
echo "<p>Последний сегмент: " . $lastSegment . "</p>";
?>
