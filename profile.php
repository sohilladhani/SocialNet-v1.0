<?php 
include_once('session.php');
if(!isset($_SESSION['email']))
{
	header('Location: login.php');
}
else
{	include_once ('file_constants.php');
	$emailses = $_SESSION['email'];
	$query = "SELECT * FROM members WHERE Email = '$emailses'";
	$query = mysql_query($query);
	$data = mysql_fetch_array($query);
	$name = $data['Name'];
	$id = $data['ID'];
	$img_dir = $data['Image'];
	$gender = $data['Gender'];
	$about_me = $data['About_Me'];
	$dob = $data['DOB'];
	$year1 = explode("-",$dob);
	$year = $year1[0];
	$curr_year =  Date('Y');
	$age = $curr_year - $year;


}



?>



<html>
<head><link rel="shortcut icon" href="favicon1.ico"/>
<link rel="stylesheet" type="text/css" href="profile.css"/>
<title><?php echo $name . "'s" . " profile";?></title>

</head>

<body class="abc">
<div id="header-wrap">
   <div id="image">
   	<div id="itext">
  	Social networking website
	</div>
   </div>
</div>



<div id="container">



<div id="row">

<h1>Social Networking Website</h1>
	<h2>For Social Awareness</h2>

<div id="rowbuttons">
	
	<div id="logout">
	<form name="logout" method="post" action="logout.php">
	<input type="image" src="logout.png" onmouseover="this.src='logoutmo.png'" onmouseout="this.src='logout.png'" alt="submit" height="45" width="80"/></form>
	</div>

	<div id="update">
		<form name="update" method="post" action="updateprofile.php">
		<input type="image" src="update.png" onmouseover="this.src='updatemo.png'" onmouseout="this.src='update.png'" alt="submit" height="45" width="80"/>
		</form>
	</div>

</div><!--rowbuttons ends-->
<hr width="120%" style=" border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0.2), rgba(0,0,0,1), rgba(0,0,0,0.2)); 
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0.2), rgba(0,0,0,1), rgba(0,0,0,0.2)); 
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0.2), rgba(0,0,0,1), rgba(0,0,0,0.2)); 
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0.2), rgba(0,0,0,1), rgba(0,0,0,0.2));
    margin-left:0%; " align="center"/>

<div id="col1">

Name: <?php echo $name; ?><br/><br/>
<img src="<?php echo $img_dir; ?>" alt="Image cannot be displayed" /><br/><br/>

Email: <?php echo $emailses;?><br/>
Age: <?php echo $age;?><br/><br/>

About Me: <?php echo $about_me;?><br/><br/>


</form>
</body>
</div><!--col1 ends-->
<div id="col2">



</div><!--col2 ends-->
</div><!--Container ends-->
</html>
<?php
include('conclose.php');
?>