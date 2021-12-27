<?php
// function.php
/**
 * $_SESSION["user_name"] が空だった場合、ログインページにリダイレクト
 * @return void
 */
function check_user_logged_in() {
    // セッション開始
    session_start();
    // セッションにuser_nameの値がなければlogin.phpにリダイレクトする
    if (empty($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
}
?>