<?php
include("header.php");
if(isLoggedIn()==false)
{
	header("Location: http://yahoo.com");

}
?>
Hello!
<?php include("footer.php"); ?>