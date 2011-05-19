<?php 

$pdo = new PDO("sqlite:./sqlite.db");

$rows = $pdo->query("select * from user ")->fetchAll(PDO::FETCH_OBJ);

print_r($rows);

?>