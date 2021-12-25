<?php
require_once("db_connect.php");
// セッション開始
session_start();
// ログインボタンが押された場合のみ、下記の処理を実行する
if (!empty($_POST)) {
    // ユーザ名が入力されてない場合のみ、下記の処理を実行する
    if (empty($_POST["name"])) {
        echo "ユーザ名がが未入力です。";
    }
    // パスワードが入力されてない場合の処理
    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }

    // 両方共入力されている場合
    if(!empty($_POST["name"]) && !empty($_POST["pass"])) {
        // ユーザ名とパスワードのエスケープ処理
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        // ログイン処理開始
        $pdo = db_connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        // 結果が1行取得できたえら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // ハッシュ化されたパスワードを判定する提携関数のpassword_verify
            if (password_verify($pass, $row['password'])) {
                // セッションに値を保存
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違っていた時の処理
                echo "パスワードに誤りがあります。";
            }
        } else {
                // ユーザ名がなかった時の処理
                echo "ユーザ名かパスワードに誤りがあります。";
        
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>ログインページ</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <h2 class="clearfix">ログイン画面</h2>
        <div class="clearfix"><a href="signUp.php" >新規ユーザ登録</a></div>
        <form method="post" action="">
            <input type="text" name="name" id="name" placeholder="ユーザ名">
            <br>
            <input type="password" name="pass" id="pass" placeholder="パスワード">
            <br>
            <input type="submit" value="ログイン" id="submit">
        </form>
    </body>
</html>