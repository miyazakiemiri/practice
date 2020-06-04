<?php
//課題1
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($number) {
    $a = $number *2;
    echo $a.PHP_EOL;
}

sum(2);


//課題2
//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
    return $a + $b;
}
echo f(1,1).PHP_EOL;


//課題3
//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
//を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function multiple_array($arr){
    $result= 1;
    foreach($arr as $a){
    $result *= $a; 
    }
    return $result;
}

echo multiple_array(array(1,3,5,7,9)).PHP_EOL;

//課題4
//【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
//という関数を実装しようとしています。途中の部分を完成させてください。

$arr = array(1,2,3);
function max_array($arr){
    $result = 0;
    foreach($arr as $a){
        if($result < $a){
            $result =$a;
        }
    }
    return $result;
}

echo max_array($arr).PHP_EOL;

//課題5
//次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//strip_tags【文字列から HTML および PHP タグを取り除く】
$str = "<h1>関数1</h1>"
  . "<p>関数2</p>";
echo strip_tags($str) .PHP_EOL;


//array_push【一つ以上の要素を配列の最後に追加する】

$fruits = array("orange", "banana","kiwi");
array_push($fruits, "apple", "grape");
print_r($fruits).PHP_EOL;


//array_merge【配列に文字や値を結合する】

$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits3 = ['anzu', 'papaya'];

$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);

print_r($fruits_merge).PHP_EOL;

//time【現在時刻のUNIXタイムスタンプを取得:協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間】

echo '現在のUnixタイムスタンプ：'.time().PHP_EOL;


//mktime【指定した日時のUNIXタイムスタンプを取得】

$timestamp = mktime(0, 0, 0, 6, 4, 2020);
echo $timestamp.PHP_EOL;


//date【曜日を取得する】

$week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];
 
$date = date('w');

echo $week[$date] . '曜日'.PHP_EOL;


//関数追加課題1
//引数なしバージョン
//output_yamada();→ 私の名前は山田太郎です。

function output_yamada(){
    $name = "私の名前は山田太郎です。";
    echo $name.PHP_EOL;
}

output_yamada();


//関数追加課題2
//複数引数ありバージョン
//output_name(“山田”, ”太郎”); → 私の名前は山田太郎です。
//output_name(“鈴木”, ”次郎”);→ 私の名前は鈴木次郎です。

function output_name($last_name,$first_name){
    echo "私の名前は".$last_name.$first_name."です。".PHP_EOL;
}

output_name("山田","太郎");
output_name("鈴木","次郎");


//関数追加課題
//make_harf(4) → 2
//make_harf(6) → 3
//make_harf(10) → 5

function make_harf($x){
    $y = $x / 2;
    echo $y.PHP_EOL;
}

make_harf(4);
make_harf(6);
make_harf(10);

?>