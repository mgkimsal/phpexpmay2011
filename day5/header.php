<?php 
include("functions.php");
if(!isLoggedIn()){ 
	header("Location: http://yahoo.com");
	die();
}
?>
<html>
<head>
<title>DEMO PAGE</title>
<?php include("styles.php"); ?>
</head>
<body>
<div id="main">

