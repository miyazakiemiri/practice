<?php
$integer = 20;
echo $integer;

$string = "abc";
echo $string;

$new_integer = $integer + 10;
echo $new_integer;

$array = [2017,2018,2019,2020];
echo $array[0];
echo $array[2];

$array2 = ["spring","summer","autumn","winter"];
echo $array2[2];

$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥",
    ];
echo $animals["cat"];
echo $animals["bird"];

$result = true;
if ($result == true) {
    echo "成功しました。";
} else {
    echo "失敗しました。";
}

$value = 6;
echo $value +2;

$value = 6;
echo $value -2;

$value = 6;
echo $value *2;

$value = 6;
echo $value /2;

$value = "AAA";
echo $value . "BBB";

$value = 10;
$result = $value == 20;
var_dump($result);

$value = 10;
$result = $value < 20;
var_dump($result);

$value = 10;
$result = $value > 20;
var_dump($result);

$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);

$result = $a === $b;
var_dump($result);

$value = 10;
++$value;
echo $value;

$value = 10;
--$value;
echo $value;

$value = 10;
$value += 5;
echo $value;

$value = 10;
$value -= 5;
echo $value;

$value = 'apple';
$value .= 'orange';
echo $value;

$value = 10;
$result = ($value < 20) ? '$valueは20より小さい':'$valueは20と等しいかまたは大きい';
echo $result;

$a = 3;
$b = 7;
echo $a+ $b;

$hello = "Hello,";
$name = "miyazaki";
$world = "'s world!";
echo $hello.$name.$world;

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];