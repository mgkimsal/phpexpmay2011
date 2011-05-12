<?php 
var_dump($_POST);
var_dump($_GET);
echo $_REQUEST
?>
<form method="post" action="file8.php?name=foo">
<input type='text' name='name'/>
<input type='submit'/>
</form>