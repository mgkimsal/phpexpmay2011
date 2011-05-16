<pre>
<?php
echo "POST=".print_r($_POST)."\n";
echo "GET=".print_r($_GET)."\n";
echo "REQUEST=".print_r($_REQUEST)."\n";
?>
</pre>
<form method="post">
Name: <input type='text' name='name' value="<?=htmlentities($_POST['name']);?>"/><br/>
Age: <input type='text' name='age' value="<?=htmlentities($_POST['age']);?>"/><br/>
<input type='submit'/>
</form>
