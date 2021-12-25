<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// POSTで送られていなければ処理実行
if(!empty($_POST)) {
    // nameとpasswordの入力チェック
    if(empty($_POST["name"])) {
        echo 'ユーザ名が未入力です';
    } elseif(empty($_POST["password"])) {
        echo 'パスワードが未入力です';
    }

    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
        // 入力したnameとpasswordを格納
        $name = $_POST["name"];
        $password = $_POST["password"];

        // PDOのインタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
            // パスワードをハッシュ化
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            // 値をセット
            $stmt = $pdo->prepare($sql);
            // バインド
            $stmt->bindParam(':password', $password_hash);
            $stmt->bindParam(':name', $name);
            // 実行
            $stmt->execute();
            // login.phpにリダイレクト
            header("Location: login.php");
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
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
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
        <h1>ユーザ登録画面</h1>
        <form method="POST" action="signUp.php">
            <input type="text" name="name" id="name" placeholder="ユーザ名">
            <br>
            <input type="password" name="password" id="password" placeholder="パスワード">
            <br>
            <input type="submit" value="新規登録" id="signUp" name="signUp">
        </form>
    </body>
</html>