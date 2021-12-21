<?php
// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');

// POSTで送られていれば処理実行
if(!empty($_POST)) {
    $name = filter_input(INPUT_POST, 'name');
    $password = filter_input(INPUT_POST, 'password');
    // nameとpassword両方送られてきたら処理実行
    if($name && $password ){
        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備　プリペアドステートメントの作成
            $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
            // パスワードをハッシュ化
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            // 値をセット
            $stmt = $pdo->prepare($sql);
            // バインド
            $stmt->bindValue(':password', $password_hash);
            $stmt->bindParam(':name', $name);
            // 実行
            $stmt->execute();
            // 登録完了メッセージ出力
            echo '登録が完了しました';
        }catch (PDOException $e) {
            echo 'Error: '. $e->getMessage();
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
    </head>
    <body>
        <h1>新規登録</h1>
        <form method="POST" action="signUp.php">
            user:<br>
            <input type="text" name="name" id="name">
            <br>
            password:<br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="submit" id="signUp" name="signUp">
        </form>
    </body>
</html>