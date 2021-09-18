<?php
$time = intval(date("H", time()));
echo "今{$time}時台です<br>";

if($time >= 6 && $time<=8) {
    echo 'おはようございます';
}elseif($time >= 9 && $time <= 19) {
    echo 'こんにちは';
}elseif($time >= 20 || $time <= 5) {
    echo 'こんばんは';
}

?>