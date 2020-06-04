<?php
//
$dinner = "ハンバーグ";
if($dinner == "ハンバーグ"){
    echo "楽しみ！ハンバーグ大好き";
} else {
    echo "ウェー食べたく無いよ";
}

//
$name = "Alexa";
if($name == "Alexa"){
    echo "はい、私は".$name."です";
} else {
    echo "GoogleHome ではありません。";
}


//35000以上 "海外旅行へ行く";
//10000以上35000未満 "国内旅行へ行く";
//10000未満 "近所の喫茶店へ行く"

$money = 34000;

if($money >= 3500){
    echo "海外旅行へ行く";
} elseif($money >= 10000) {
    echo "国内旅行へ行く";
} else {
    echo "近所の喫茶店へ行く";
}
?>