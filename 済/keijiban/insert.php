<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");

$pdo ->exec("insert into keijiban(handlename,title,comments)values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header('Location:http://localhost/keijiban/keijiban.php');

?>