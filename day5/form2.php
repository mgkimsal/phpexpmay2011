<?php

$age = (int)$_POST['age'];
if($age>18 && $age<65) {
	
}

if($_POST) { 
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	$hasAll = true;
	foreach($_POST['info']['main'] as $v) { 
		if($v=='') {
			$hasAll = false;
		}
	}
	if(!$hasAll) {
		echo "you were missing one or more required fields";
	}
}

$fields['main'] = array("name","email","phone");
$fields['extra'] = array("city","favoritecolor");
?>
<html>
<head>
<style>
label { width:8em; float:left; }
</style>
</head>
<body>

<form method="post">
<?php foreach($fields as $type=>$array) { ?>
<?php foreach($array as $name) { ?>
<p><label for="<?=$name;?>"><?=ucfirst($name);?></label>
<input type="text" name="info[<?=$type;?>][<?=$name;?>]"/></p>
<?php } ?>
<?php } ?>
<input type='submit'/>
</form>
</body>
</html>
