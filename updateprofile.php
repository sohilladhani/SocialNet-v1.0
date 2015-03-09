<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('Location: login.php');
}
else
{
	include_once ('file_constants.php');
	$emailses = $_SESSION['email'];
	$query = "SELECT * FROM members WHERE Email = '$emailses'";
	$query = mysql_query($query);
	$data = mysql_fetch_array($query);
	$name = $data['Name'];

}
?>

<html>
<head><link rel="shortcut icon" href="favicon1.ico"/>
<link rel="stylesheet" type="text/css" href="reg.css"/>
</head>

<body class="abc">
<table  cellspacing="12" >
<form name="update" method="post"  action="updatedprofile.php" enctype="multipart/form-data">


<tr><td><br></td><td><br></td></tr>

<tr>
<td><label for="name1">Name:</td>
<td><input type="text" name="name" id="name1" size="28" value="<?php echo $name;?>" /></td>
</tr>


<tr>
<td><label for="email">About me:</td>
<td><textarea rows='6' cols='20' name="about_me" id="about_me"></textarea></td></td>
</tr>


<tr>
<td><label for="image">Image: </td>
<td><input type="file" name="image" id="image"/></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Update" name="submit"/></td>
</tr>

</form>
</table>
</body>
</html>
<?php
include('conclose.php');
?>