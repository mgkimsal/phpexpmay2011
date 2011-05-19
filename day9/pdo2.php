<?php 

$pdo = new PDO("sqlite:./sqlite.db");
$pdo = new PDO("mssql:host=localhost;dbname=foo","user","pass");


$s = $pdo->prepare("select * from user where id=?");
$s->execute(array(1));
//$s->execute(array($_GET['id']));

while($row = $s->fetch()){
	print_r($row);
}

?>