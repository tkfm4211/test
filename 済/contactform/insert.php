<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");

$pdo ->exec("insert into contactform(name,mail,age,comment)values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comment']."');");

?>

<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>insert</title>
        <link rel="stylesheet" type="text/css" href="confirm.css">
    </head>
    
    <body>
        <h1>お問合せフォーム</h1>
        
        <div class="confirm">
            <p>お問い合わせありがとうございました。<br>
            3営業日以内に担当者よりご連絡差し上げます。
            </p>
            
        </div>
        
    </body>
</html>