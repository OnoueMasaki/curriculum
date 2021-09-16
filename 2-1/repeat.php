<?php

$num = 0;
while($num < 10) {
    echo $num;
    $num++;
}

echo '<br>';

$num = 0;
do {
    echo $num;
    $num++;
} while($num < 10);

echo '<br>';

for($i=0;$i<10;$i++) {
    echo $i;
}

echo '<br>';

$num = 0;
while($num < 10) {
    echo $num;
    $num++;
    if($num == 5) {
        break;
    }
}

echo '<br>';

for($i=0;$i<=100;$i++) {
    echo $i;
    echo '<br>';
}

$countries = ["America", "Japan", "China", "Korea"];
echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
echo '<br>';

var_dump($countries);

echo '<br>';
/*
$fruits = ["りんご", "みかん", "ぶどう"];

// 0番目のりんごを出力
echo $fruits[0];
echo '<br>';
// 1番目のみかんを出力
echo $fruits[1];
echo '<br>';
// 2番目のぶどうを出力
echo $fruits[2];
echo '<br>';
// 配列全体を出力
var_dump($fruits);
*/

$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

// りんごを出力
echo $fruits["apple"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];

$fruits["peach"] = "もも";

var_dump($fruits);

?>