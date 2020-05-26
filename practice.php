<?php
$a = 3;
$b = 7;
echo $a + $b;

$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month['7'];

$hello = "Hello,";
$name = "Miyazaki";
$world = "'s world!";
echo $hello.$name.$world;

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

// 5.【応用】バグの修正
//   変数　$2018_calendar→$calendar_2018に変更
//   配列を囲む{}を[]にした
$calendar_2018 = [
  "January" => "1月",
// 2月"、→　2月",に修正
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
//　= "6月",　→　  => "6月",　に修正
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
// 10月, →　"10月",　に修正
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 変数　$2018_calendar→$calendar_2018に修正
// December→"December"に修正
echo $calendar_2018["December"];