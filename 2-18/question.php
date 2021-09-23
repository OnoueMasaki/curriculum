<link rel="stylesheet" href="questionstyle.css">
<?php
$my_name = $_POST['my_name'];

$question1 = ["80", "22", "20", "21"];
$question2 = ["PHP", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert", "update"];

$correctanswer1 = ["80"];
$correctanswer2 = ["HTML"];
$correctanswer3 = ["select"];


?>

<form action="answer.php" method="post">

<p>お疲れ様です<?php echo $my_name; ?>さん</p>

<h2>①ネットワークのポート番号は何番?</h2>

<?php foreach ($question1 as $value1) : ?>
    <input type="radio" name="answer1" value="<?php echo $value1 ?>" ><?php echo $value1; ?>
<?php endforeach; ?>

<h2>②Webページを作成するための言語は?</h2>
<?php foreach ($question2 as $value2) : ?>
    <input type="radio" name="answer2" value="<?php echo $value2 ?>" ><?php echo $value2; ?>
<?php endforeach; ?>

<h2>③MySQLで情報を取得するためのコマンドは?</h2>
<?php foreach ($question3 as $value3) : ?>
    <input type="radio" name="answer3" value="<?php echo $value3 ?>" ><?php echo $value3; ?>
<?php endforeach; ?>

<br>
<input type="hidden" name="correctanswer1" value="<?php echo implode($correctanswer1); ?>" />
<input type="hidden" name="correctanswer2" value="<?php echo implode($correctanswer2); ?>" />
<input type="hidden" name="correctanswer3" value="<?php echo implode($correctanswer3); ?>" />
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>"/>
<input type="submit" value="回答する" />

</form>