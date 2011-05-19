<?php 

$pdo = new PDO("sqlite:./sqlite.db");

$pdo->beginTransaction();
$pdo->query("insert into user (username, email, phone) values ('fred','fred@yahoo.com','444')");
$all = $pdo->query("select * from user where username='fred' ")->fetchAll();
print_r($all);
$pdo->rollBack();
$all = $pdo->query("select * from user where username='fred' ")->fetchAll();
print_r($all);


?>