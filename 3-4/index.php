<?php
require_once("getData.php");

$getData = new getData();

$users = $getData->getUserData();

$posts = $getData->getPostData();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タイトル</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="users clearfix">
            <div class="left">
                <div class="left-image"><img src="logo.png" width="176px" height="99px"></div>
            </div>
            <div class="right">
                <div class="right-upper"><?php echo 'ようこそ '.$users['last_name'].$users['first_name'].' さん'; ?></div>
                <div class="right-lower"><?php echo '最終ログイン日 '.$users['last_login']; ?></div>
            </div>
        </div>
        <div class="contents">
            <table align="center">
                <tr class="category">
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>
                <?php foreach($posts as $row) : ?>
                    <tr class="content">
                        <th>
                            <?php echo $row['id']; ?>
                        </th>
                        <th>
                            <?php echo $row['title']; ?>
                        </th>
                        <th>
                            <?php 
                            if($row['category_no'] == 1){
                                echo '食事';
                            }else if($row['category_no'] == 2){
                                echo '旅行';
                            }else {
                                echo 'その他';
                            }
                            ?>
                        </th>
                        <th>
                            <?php echo $row['comment']; ?>
                        </th>
                        <th>
                            <?php echo $row['created']; ?>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="header">Y&I group.inc</div>
    </div>
</body>
</html>