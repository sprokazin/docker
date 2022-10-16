<?php

//Первое задание
echo nl2br(PHP_EOL . " FirstTask: " . PHP_EOL);
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = $very_bad_unclear_name;
$order = $order . ' ,6 nuggets and big french fries';
$very_bad_unclear_name = $order;

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


//Второе задание
echo nl2br(PHP_EOL . "SecondTask: " . PHP_EOL);
$var = 10;
echo $var . "\n";
$secVar = 11;
echo nl2br(PHP_EOL . $secVar);
$doubleVar = 1.23;
echo nl2br(PHP_EOL . $doubleVar);
$twelveVar = 3 + 9;
echo nl2br(PHP_EOL . $twelveVar);

$last_month = '1187,23';
$this_month = '1089,98';
$formatLast = str_replace(',', '.', $last_month);
$formatLast = floatval($formatLast);
$formatThis = str_replace(',', '.', $this_month);
$formatThis = floatval($formatThis);
echo nl2br(PHP_EOL . ($formatLast - $formatThis));

//Третье задание
echo nl2br(PHP_EOL . "ThirdTask: " . PHP_EOL);
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo nl2br($days_per_language);
//Четвертое задание
echo nl2br(PHP_EOL . "FourthTask: " . PHP_EOL);
echo 8 ** 2;
//Пятое задание
echo nl2br(PHP_EOL . "FifthTask: " . PHP_EOL);
$my_num = 12;
$answer = $my_num;
$answer += 2;
echo $answer;
$answer *= 2;
echo nl2br(PHP_EOL . $answer);
$answer -= 2;
echo nl2br(PHP_EOL . $answer);
$answer /= 2;
echo nl2br(PHP_EOL . $answer);
$answer -= $my_num;
echo nl2br(PHP_EOL . $answer);
//Шестое задание
echo nl2br(PHP_EOL . "SixthTask: " . PHP_EOL);
$a = 10;
$b = 3;
$c = $a % $b;
$a = 13;
$b = 4;

if ($a % $b === 0) {
    echo 'Делится без остатка';
} else {
    $diff = $a % $b;
    echo 'Делится с остатком ' . $diff;
}

//Седьмое задание
echo nl2br(PHP_EOL . "SeventhTask: " . PHP_EOL);
$st = pow(2, 10);
echo $st;
echo nl2br(PHP_EOL . sqrt(245));
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum += $item;
}
echo nl2br(PHP_EOL . sqrt($sum));

//Восьмое задание
echo nl2br(PHP_EOL . "EighthTask: " . PHP_EOL);
echo round(sqrt(379), 2);
echo nl2br(PHP_EOL . round(sqrt(379), 3));
$newArr = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo '<pre>';
print_r($newArr);
echo '</pre>';

//Девятое задание
echo nl2br(PHP_EOL . "NinthTask: " . PHP_EOL);
$array = [4, -2, 5, 19, -130, 0, 10];
echo min($array);
echo nl2br(PHP_EOL . max($array));

//Десятое задание
echo nl2br(PHP_EOL . "TenthTask: " . PHP_EOL);
echo rand(1, 100);
$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[$i] = rand();
}
echo '<pre>';
print_r($randArr);
echo '</pre>';