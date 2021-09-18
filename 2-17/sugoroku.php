<?php
$count = 0;
for($i=1;$i<100;$i++) {
    if ($count >= 40) {
        echo "合計".$i."回でゴールしました";
        break;
    } else {
        $rand = mt_rand(1,6);
        echo $i."回目＝".$rand;
        $count += $rand;
        echo '<br>';
    }
}

?> 