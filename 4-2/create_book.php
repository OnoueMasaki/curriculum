<?php
// db_connect.phpの作成
require_once("db_connect.php");

// function.phpの読み込み
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if(!empty($_POST)) {
    // titleとdateとstockの入力チェック
    if(empty($_POST["title"])) {
        echo 'タイトルが未入力です';
    } elseif (empty($_POST["date"])) {
        echo '日付が未入力です';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です';
    } 

    if(!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])){
        // 入力したtitleとdateとstockを格納
        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST["stock"];

        // PDOのインスタンスを
        $pdo = db_connect();

        try {
            // SQL文の準備　プリペアードステートメントの作成
            $stmt = $pdo->prepare("INSERT INTO books(title, date, stock) VALUES (:title, :date, :stock)");
            // タイトルと本文のバインド
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':stock', $stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/create_book.css">
    </head>
    <body>
        <h1>本　登録画面</h1>
        <form method="POST" action="">
            <input type="text" name="title" id="title" placeholder="タイトル">
            <br>
            <input type="text" name="date" id="date" placeholder="発売日">
            <br>
            <p>在庫数</p>
            <input type="number" name="stock" id="stock" placeholder="選択してください">
            <br>
            <input type="submit" value="登録" id="post" name="post">
        </form>
    </body>
</html>