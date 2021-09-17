<?php
$countries = ["japan", "korea", "india", "italy", "australia"];
echo count($countries);
echo '<br>';
sort($countries);
var_dump($countries);
echo '<br>';
$numbers = [135, 45, 120, 35, 456];
sort($numbers);
var_dump($numbers);

echo '<br>';
var_dump(in_array("japan", $countries));

echo '<br>';
if (in_array("japan", $countries)) {
    echo '日本があるよ！';
} else {
    echo '日本はないよ！';
}

echo '<br>';
$atstr = implode("_", $countries);
var_dump($atstr);

echo '<br>';
$re_countries = explode("_", $atstr);
var_dump($re_countries);

// 1.要件定義　必要な機能や要求をわかりやくすまとめていく作業
// 2.単体テスト・結合テスト　単体テストはプログラムを構成する小さな単位が機能を正しく果たしているかどうかを検証するテスト
// 結合テストは単体テスト同士を結合してするテストのことである。
// 3.テスト仕様書　単体テストや結合テストの工程でどの機能を、どのテスト技法を使ってテストするのかを記すもの

?>