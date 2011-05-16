<?php
$url = "http://www.flickr.com/photos";
$html = file_get_contents($url);

$regex = "/(src=\")http:\/\/farm.*?\"/";
$y = preg_match_all($regex, $html, $m);

foreach($m[0] as $url){
	$url = str_replace("src=",'', $url);
	$url = str_replace('"','', $url);
?>
<img src="<?php echo $url;?>"/><br/>
<?php } ?>
