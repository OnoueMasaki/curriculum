<?php
$age = 24;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}
echo '<br>';

// 学生かどうか
$is_student = false;
if ($is_student) {
    echo 'あなたは学生です。';
}

echo '<br>';
if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ';
}
// 例として、血液型を診断する条件分岐
echo '<br>';
$blood = 'B';
/*
if($blood == 'A') {
    echo "A型です";
} elseif($blood == 'B') {
    echo "B型です";
} elseif($blood == 'O') {
    echo "O型です";
} elseif($blood == 'AB') {
    echo "AB型です";
} else {
    echo "A/B/O/ABから選択してください";
}
*/

switch ($blood){
    case 'A':
        print 'A型です。';
        break;
    case 'B':
        print 'B型です。';
        break;
    case 'O':
        print 'O型です。';
        break;
    case 'AB':
        print 'AB型です';
        break;
    default:
        echo 'A/B/O/ABから選択してください';
}

echo '<br>';
$name = "";

/*
if ($name != "") {
    echo '名前を受け付けました';
} else {
    echo '名前を入力してください';
}
*/

echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';

$string = '1';
$int = 1;
echo '<br>';

if (1 === $string) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}
// 「変数stringはstring型です」が出力される

echo '<br>';
if (1 === $int) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}
// 「変数stringはint型です。」が出力される

$name = "tar";
$password = "pas";
echo '<br>';

if ($name == "taro" && $password == "pass") {
    echo 'ログイン成功です';
} elseif ($name == "taro") {
    echo 'パスワードが間違っています';
} elseif ($password == "pass") {
    echo '名前が間違っています';
} else {
    echo '入力情報が間違っています';
}

?>