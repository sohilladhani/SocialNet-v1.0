<?php 
if(isset($_POST['submit']))
{
$server="localhost";
$user="root";
$db="members";

$con = mysql_connect($server,$user);
if(!$con) die("Cannot Connect".mysqli_error());
if(!mysql_select_db($db,$con))
{
	mysql_query("CREATE DATABASE $db",$con);
	mysql_select_db($db);
} 
else
{
	mysql_select_db($db,$con);
}
$name = 	isset($_POST['name1'])? $_POST['name1']:"";
$name = 	mysql_real_escape_string($name);
$email = 	isset($_POST['email'])? $_POST['email']:"";
$email = 	mysql_real_escape_string($email);
$gender = 	isset($_POST['gender'])? $_POST['gender']:"";
$gender = 	mysql_real_escape_string($gender);
$password = isset($_POST['password'])? $_POST['password']:"";
$password = mysql_real_escape_string($password);
$year = 	isset($_POST['year'])? $_POST['year']:"";
$year = 	mysql_real_escape_string($year);
$month = 	isset($_POST['month'])? $_POST['month']:"";
$month = 	mysql_real_escape_string($month);
$date = 	isset($_POST['date'])? $_POST['date']:"";
$date = 	mysql_real_escape_string($date);
$dob = 		$year.'-'.$month.'-'.$date;


$default_img_male = "defaultmale.png";
$default_img_female = "defaultfemale.png";
//echo $img_dir;

//$query = "SELECT * FROM members";
//$query = mysqli_query($query);
//$row = mysqli_fetch_row($query);

$table = "CREATE TABLE IF NOT EXISTS members (ID INT NOT NULL AUTO_INCREMENT,
            Name VARCHAR(30),
            Email VARCHAR(60),
            Gender VARCHAR(10),
            Password VARCHAR(10),
            DOB DATE,
            Image TEXT(2000),
            About_Me TEXT(500),
            Primary Key (ID), UNIQUE INDEX (Email))";
mysql_query($table);




$access = "SELECT * FROM members WHERE (Email = '$email')";
$access = mysql_query($access);
$accessrow = mysql_num_rows($access);

if($accessrow == 1)
{
    //header('Location: register.php');
    include('register.php');
    echo "<script language='javascript'>document.getElementById('validateemail').innerHTML='<h>Email already taken</h>';</script></font>";
}
else
{



	$sql1= "INSERT INTO members (ID) VALUES(null)";//,'$name','$email','$gender','$password','$dob','$img_dir',null)";
	mysql_query($sql1);
	$id = mysql_insert_id();

	chdir('members_image');
		if(is_dir($id))
		{
			chdir($id);
			$img_path = 'members_image'.'.'.$id;
			$img_path = str_replace(".","\\",$img_path);
		}
		else
		{
			mkdir($id);
			chdir($id);
			$img_path = 'members_image'.'.'.$id;
			$img_path = str_replace(".","\\",$img_path);
		}


	$img_dir = "members_image" . "\\" . $id . "\\" . $id . ".jpg";
	chdir("..");
	chdir("..");
	//echo getcwd();
	if($gender == 'Male')
	{
			copy($default_img_male,$img_dir);
	}
	else
	{
			copy($default_img_female,$img_dir);
	}
	//echo $id;
	$img_dir = addslashes($img_dir);
	$sql = "UPDATE members SET Name = '$name', Email = '$email' ,Gender = '$gender' ,Password = '$password', DOB = '$dob', Image = '$img_dir' WHERE ID = '$id'";
	mysql_query($sql);

	echo '<html>';
	echo '<head>';
	echo '<link rel="stylesheet" type="text/css" href="reg.css"/>';
	echo '</head>';
	echo '<body class="abc">';
	echo "Welcome <i>$name</i>! You are registered with email <i>$email</i><br/>Click Login to go to Login Page.<br/><br/>";
	
	echo '<form name="gotologin" action="login.php">';
	echo '<input type="image" src="login.png" onmouseover="this.src=\'loginmo.png\'" onmouseout="this.src=\'login.png\'" alt="submit" height="45" width="80"/>';
	echo "</form>";
	
	echo "</body>";
	echo "</html>";
}
mysql_close($con);
}
?>