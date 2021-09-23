<?php

$count = 0;
$sum = 0;

while($sum < 40) {
    $count ++;
    $rand = mt_rand(1,6);
    echo $count."回目＝".$rand;
    echo '<br>';
    $sum += $rand;
}

echo "合計".$count."回でゴールしました";

?> 