<?php 


$resource = fopen("./file1.php", "r");
while(!feof($resource)) { 
	$line .= fgets($resource);
//	$line[] = fgetcsv($resource); // read in csv in to array
//	$line .= fgetss($resource); // read in and strip HTML
}
fclose($resource);
echo $line;

?>