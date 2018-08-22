<?php

require_once "./src/functions.php";

$stringArray = [
	1 => "Бережно грабли кладу",
	2 => "Перед дверью соседа.",
	3 => "Ошибкам учиться хочу."
];

echo task1($stringArray) . PHP_EOL;
echo task1($stringArray, true) . PHP_EOL;
//echo task2("-", "not numeric", 2, 9, 8, 2, 1, 1.2);
//task3(8, 8);
//echo task4(). PHP_EOL;
//echo task5(). PHP_EOL;
//echo task6("text.txt");
