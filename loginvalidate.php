<?php
if(isset($_REQUEST['submit']))
{
include_once('session.php');
include ('file_constants.php');

if(!mysql_select_db($db,$con))
{
	include('login.php');
	echo "<script language='javascript'>document.getElementById('wrong').innerHTML='<h>Wrong Email and/or Password</h>';</script></font>";	
}
else
{

$email = isset($_POST['email'])? $_POST['email']:"";
$email = mysql_real_escape_string($email);

$password = isset($_POST['password'])? $_POST['password']:"";
$password = mysql_real_escape_string($password);

$access = "SELECT * FROM members WHERE (Email = '$email') AND (Password = '$password')";
$access = mysql_query($access);
$accessrow = mysql_num_rows($access);

if($accessrow == 1)
{
	$_SESSION['email'] = $_POST['email'];
	header('Location: profile.php');
}
else
{
	include('login.php');
	echo "<script language='javascript'>document.getElementById('wrong').innerHTML='<h>Wrong Email and/or Password</h>';</script></font>";
	//header('Location: login.php');
}

include('conclose.php');
}
}
?>