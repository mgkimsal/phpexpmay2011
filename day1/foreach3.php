<?php
$people = array(
	"ABC123"=>array("name"=>"mike", "email"=>"mgkimsal@gmail.com"),
null,
	"DEF444"=>array("name"=>"joe", "email"=>"joe@gmail.com")
);

foreach($people as $personId=>$personData)
{
	if(null==$personData) { continue; }
	echo "Person id #$personId has name of ".$personData['name']."\n";
}
