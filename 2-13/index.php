<?php
    // 計算の練習
    $x = 9.9;
    echo ceil($x);
    echo '<br>';
    echo floor($x);
    echo '<br>';
    echo round($x);
    echo '<br>';

    echo pi();
    echo '<br>';
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area;
    }
    // 半径が8の円の面積の計算
    circleArea(8);

    // 乱数の練習
    echo '<br>';
    echo mt_rand(1, 10000);

    // 文字列操作の練習
    echo '<br>';
    $str = "freeks";
    echo strlen($str);
    echo '<br>';
    echo strpos($str, "e");
    echo '<br>';
    echo substr($str, -4, 2);
    echo '<br>';
    echo str_replace("f", "F", $str);
    echo '<br>';

    //表示の練習
    $limit_hour = 23;
    $limit_minute = 59;
    $limit_second = 59;
    printf("あと%02d時間%02d分%02d秒です。",$limit_hour,$limit_minute,$limit_second);

    $limit_time = sprintf("現在の時刻は%d時間%d分%d秒です。",$limit_hour,$limit_minute,$limit_second);
    echo '<br>';
    echo $limit_time;
?>