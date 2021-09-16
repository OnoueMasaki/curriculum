<?php
// PHPの研修カリキュラム2-1
?>
<?php
/*
PHPの
研修
カリキュラム
1-1
*/
?>
<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.開発環境・検証環境・本番環境"."<br>";
echo "ソフトウェアやシステムを開発するために必要なデバイスやソフトウェア・システムをテストする工程・じっさいに動作させること"."<br>";
echo "2.基本設計書・詳細設計書"."<br>";
echo "基本設計はシステムの概要やだいたいの機能・詳細設計は細かな所"."<br>";
echo "3.Ajax"."<br>";
echo "あるWebページを表示した状態のまま、別のページや再読み込みなどをせずにWebサーバ側と通信を行い、動的に表示内容を変更する手法"."<br>";
?>

<?php
// index.php
$message = "Hello World!";
var_dump($message);
echo '<br>';

$x = 8;
$y = 5.55;
var_dump($x);
echo '<br>';

var_dump($y);

echo '<br>';
$flag = true;
var_dump($flag);

echo '<br>';
$emp = null;
var_dump($emp);

echo '<br>';
$en_words = 'Hello World';
var_dump($en_words);
echo '<br>';
$ja_words = 'こんにちは';
var_dump($ja_words);

echo '<br>';

define("ADMIN_EMAIL", "y-i-group@gmail.com");
define("LIST_COUNT", 15);
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

// 代入演算子
echo '<br>';
$x = 5;
echo $x;

echo '<br>';
echo "hello" . "world";

echo '<br>';
$hello = "Hello";
$world = "World!";
echo $hello.$world;

echo '<br>';
echo 1 + 1;
// 改行は適宜入れたほうが見やすくなります。
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;

// 単項演算子
// $x = $x + 1
echo '<br>';
$x++;
echo $x;
// $x = $x - 1
echo '<br>';
$x--;
echo $x;

$x = 0;
 // $x = $x + 5
 $x += 5;
 echo '<br>';
 echo $x;
 // $x = $x * 5
 $x *= 5;
 echo '<br>';
 echo $x;
 // $x = $x - 5
 $x -= 5;
 echo '<br>';
 echo $x;
?>

