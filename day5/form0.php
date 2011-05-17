<html>
<pre>
<?php
echo "POST="; print_r($_POST); echo "\n";
echo "GET="; print_r($_GET); echo "\n";
echo "REQUEST="; print_r($_REQUEST); echo "\n";
?>
</pre>
<form method="post">
Name: <input type='text' name='name' value="<?php echo $_POST['name'];?>"/><br/>
Age: <input type='text' name='age' value="<?php echo $_POST['age'];?>"/><br/>
<input type='submit'/>
</form>
</html>
