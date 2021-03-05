<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
INSERT INTO keijibanK (namae, message) VALUES('".$name."', '".$message."');
try { 
    $dbh = new PDO($dsn);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $search = $_POST["search"];  // 入力された検索する文字列

    $re = $dbh->query("SELECT * FROM keijibanK WHERE message LIKE '%$search%';");
    print "検索結果を表示します<br>";


    while ($kekka = $re->fetch()) {
        print $kekka[0];
        print " | ";
        print $kekka[1];
        print " | ";
        print $kekka[2];
        print "<br>";
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>