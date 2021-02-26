<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        body {
            background-color: rgba(0,204,255,0,966);
        }
        .flex-container {
          background-color: rgba(0, 204, 255, 0.966); 
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .flex-container {
    display: flex;
    flex-direction: column; /* フレックスボックス内の箱を縦に積みます */
}

        .box {
            width:180px;
            height: 30px;
            margin: 5px;
            padding: 10px;
            border: 0px solid rgb(19, 19, 18);
        }
    </style>
</head>
<body>

<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=db1;host=localhost';
$user = 'root';
$password = 'lamp1';

try { 
    $dbh = new PDO($dsn, $user, $password);
    
    // この下にプログラムを書きましょう
    
    $re = $dbh->query("SELECT * FROM keijiban_tb");
    print '<div class="flex-container">';
        while($kekka = $re->fetch()) {
       print "<div class='box'>";
       print $kekka[0];
       print " | ";
       print $kekka[1];
       print " | ";
       print $kekka[2];
       print "<br>";
       print "</div>";
    }
 print "</div>";
 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</body>
</html>

