<html>
<body>
<?php
	
include_once('session.php');
	unset($_SESSION['email']);
	session_destroy();
	header('Location : login.php');
	if(!headers_sent())
	{
		echo "<script language='javascript'>top.location.replace('login.php');</script>";

	}
?>
</body>
</html>