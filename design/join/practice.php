<?php
    echo "問題① 変数";
    echo "<br>";
    // 自分のフルネームが入った変数を用意し、画面に出力する
    // ※ 最後に改行を２つ入れること
    $dsn = 'mysql:dbname=myfriends;host=localhost';
    $user = 'root';
    $password = 'mysql';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

     // SQL作成
    $sql = 'SELECT * FROM `areas` ';

    $stmt = $dbh->prepare($sql);
    $stmt->execute();


    
    $name = "ichinokimai";
    echo '$name';
    echo "<br>";
    echo "<br>";

    echo "問題② 配列";
    echo "<br>";
    // HTML, CSS, PHP, MySQL, CentOS, Vagrantという要素が
    // 入った配列データを作成し、一要素ずつ画面に出力する
    // (一要素出力毎に改行をすること。繰り返しなどは使用しない)
    // ※ 最後に改行を２つ入れること
    array()



    echo "問題③ 連想配列";
    echo "<br>";
    // 自分の情報が要素として入った連想配列を作成し、一要素ずつ画面に出力する (一要素出力毎に改行をすること。繰り返しなどは使用せず)
    // 要素には、name, age, nationality, gender, email, telを入れること
    // ※ 最後に改行を２つ入れること
    echo "問題④ foreach文";
    echo "<br>";
    // foreach文を使い、問題②の配列要素をすべて画面に出力する (一要素出力毎に改行をすること。)
    // ※ 最後に改行を２つ入れること
    echo "問題⑤ for文";
    echo "<br>";
    // for文を使い、問題②の配列要素をすべて画面に出力する (一要素出力毎に改行をすること。)
    // 固定の数値は一切使わず、配列要素数の変化に対応できるコードにすること
    // ※ 最後に改行を２つ入れること
?>
Contact GitHub API Training Shop Blog About
