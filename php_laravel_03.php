<?php

//課題１
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 
//「私は あなたの名前 です」、もし違ったら「あなたの名前ではありません」
//と表示するように実装してください。

$name = "Miyazaki";
if ($name = "Miyazaki") {
    echo "「私はあなたの名前です」";
} else {
    echo "「あなたの名前ではありません」";
    echo PHP_EOL;
}


//課題2
//for文を使って、1から10000までの合計の値を表示してください。

$total = 0;
echo $total;
for ( $i =0; $i <=10000; $i++) {
    $total += $i;
}
echo $total.PHP_EOL;


//課題3
//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。

$fruits = array("apple","strawberry","grapefruit","kiwi","cherry");
foreach ($fruits as $fruits){
    echo $fruits;
    echo PHP_EOL;
}


//課題４
//　【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。

//for文の始めの値を定義する
$start = 1;
//for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){

    echo $i;
    echo PHP_EOL;
  }
}