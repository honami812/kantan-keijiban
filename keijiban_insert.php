<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=db1;host=localhost';
$user = 'root';
$password = 'lamp1';

try { 
    $dbh = new PDO($dsn, $user, $password);
    
    // この下にプログラムを書きましょう

     $name = $_POST["namae"];
     $message = $_POST["message"];
    

    print $name;
    print "br";
    print $message;
    $dbh->query("INSERT INTO keijiban_tb (namae, message) VALUES ('{$name}', '{$message}');");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>