<?php

//課題１
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 
//「私は あなたの名前 です」、もし違ったら「あなたの名前ではありません」
//と表示するように実装してください。

$name = "Miyazaki";
if ($name = "Miyazaki") {
    echo "「私はあなたの名前です」";
} else {
    echo "「あなたの名前ではありません」".PHP_EOL;
}


//課題2　【修正】
//for文を使って、1から10000までの合計の値を表示してください。

$total = 0;

for ( $i =1; $i <=10000; $i++) {
    $total += $i;
}
echo $total.PHP_EOL;


//課題3　【修正】
//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。

$fruits = array("apple","strawberry","grapefruit","kiwi","cherry");
foreach ($fruits as $fruit){
    echo $fruit.PHP_EOL;
}


//課題４
//　【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。

$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++) {

  if($i % 5 == 0){

    echo $i.PHP_EOL;
  }
}
