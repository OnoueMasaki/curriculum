<?php
    // index.php
    $testFile = "test.txt";
    $contents = "こんにちは！";

    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "w");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
    echo '<br>';
    $test_file = "test2.txt";

    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたフェイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }

    // 1.CakePHPの2系、3系の違い　デバックレベル、ヘルパーの読み込み、セッション、beforeFilter、リダイレクトなど
    // 2.LAMP オープンソフトウェアの組み合わせを指す言葉
    // Linux,Apache,MySQL,Perl,PHP,Pythonの頭文字を取ったもの
    // 3.AWS Amazon Web ervicesの略でクラウドコンピューティングサービス
?>