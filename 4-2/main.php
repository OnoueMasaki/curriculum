<?php
// db_connect.phpの読み込み
require_once("db_connect.php");
// function.phpの読み込み
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// PDOのインスタンスを取得
$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM books ORDER BY id ASC";
    // プリペアードステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOExcetion $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>メイン</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
     <h1>在庫一覧画面</h1>
     <br>
     <a class="create_book" href="create_book.php">新規登録</a>
     <a class="logout" href="logout.php">ログアウト</a>
     <table>
        <tr class="type">
            <td>タイトル</td>
            <td>発売日</td>
            <td>在庫数</td>
            <td></td>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><a class="delete" href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a></td>
            </tr>
        <?php } ?>
     </table>
    </body>
</html>