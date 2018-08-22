<?php

function task1($stringsArray, $isReturn = false)
{
	if ($isReturn) {
		return implode(" ", $stringsArray);
	} else {
		$paragraphsArray = array_map(function ($item) {
			return "<p>" . $item . "</p>";
		}, $stringsArray);

		echo implode($paragraphsArray);
	}
}

function task2()
{
	$numericArgs = func_get_args();
	$mathOperator = array_shift($numericArgs);
	$resultsString = $numericArgs[0];
	$isNumeric = true;

	function array_subtract($array)
	{
		$result = $array[0];
		for ($i = 1; $i < count($array); $i++) {
			$result -= $array[$i];
		}
		return $result;
	}

	function array_division($array)
	{
		$result = $array[0];
		for ($i = 1; $i < count($array); $i++) {
			$result /= $array[$i];
		}
		return $result;
	}

	for ($i = 1; $i < count($numericArgs); $i++) {
		$resultsString .= " " . $mathOperator . " " . $numericArgs[$i] . " ";

		if (is_numeric($numericArgs[0]) == false || is_numeric($numericArgs[$i]) == false) {
			$isNumeric = false;
		}
	}

	if ($isNumeric) {
		switch ($mathOperator) {
			case "+":
				return $resultsString . " = " . array_sum($numericArgs);
			case "-":
				return $resultsString . " = " . array_subtract($numericArgs);
			case "*":
				return $resultsString . " = " . array_product($numericArgs);
			case "/":
				return $resultsString . " = " . array_division($numericArgs);
			default:
				return "operator undefined" . PHP_EOL;
		}
	} else {
		return "invalid array" . PHP_EOL;
	}
}

function task3($number1, $number2)
{
	if (is_int($number1) == true && is_int($number2) == true) {
		echo "<table border=\"1\" align=\"center\">";
		for ($i = 1; $i <= $number1; $i++) {
			echo "<tr >";
			for ($j = 1; $j <= $number2; $j++) {
				echo "<td align=\"center\" width=\"50px\" height=\"50px\">";
				echo $i * $j;
				echo "</td>";
			}
			echo "</rd>";
		}
		echo "</table>";
	} else {
		echo "invalid args (not integer) :(" . PHP_EOL;
	}
}

function task4()
{
	$unixTime = time();
	$someDate = mktime(0, 0, 0, 2, 24, 2016);

	return date("d.m.Y H:i", $unixTime) . PHP_EOL . $someDate;
}

function task5($replace = "Три")
{
	$someString1 = "Карл у Клары украл Кораллы";
	$someString2 = "Две бутылки лимонада";

	$newString1 = str_replace("К", "", $someString1);
	$newString2 = str_replace("Две", $replace, $someString2);

	return $newString1 . PHP_EOL . $newString2;
}

function task6($filePath)
{
	$content = "Hello again!" . PHP_EOL;

	if (file_exists($filePath)) {
		$content = file_get_contents($filePath);
	} else {
		file_put_contents($filePath, $content);
	}

	return $content;
}
