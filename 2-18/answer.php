<link rel="stylesheet" href="answerstyle.css">
<?php
$my_name=$_POST['my_name'];

$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$answer3=$_POST['answer3'];

$correctanswer1=$_POST['correctanswer1'];
$correctanswer2=$_POST['correctanswer2'];
$correctanswer3=$_POST['correctanswer3'];

function checkanswer($answer, $correctanswer){
    if($answer == $correctanswer) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php
checkanswer($answer1, $correctanswer1);
?>
<p>②の答え</p>
<?php
checkanswer($answer2, $correctanswer2);
?>
<p>③の答え</p>
<?php
checkanswer($answer3, $correctanswer3);
?>
