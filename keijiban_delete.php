<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */


try { 
    $dbh = new PDO($dsn);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$number = $_POST["bangou"];  // 入力された削除する番号

$dbh->query("DELETE FROM keijibanK WHERE bangou = {$number};");

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

 print "<a href='index.html'>戻る</a>";
 
?>