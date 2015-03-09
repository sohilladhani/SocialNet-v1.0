<html>
<head>
<link rel="shortcut icon" href="favicon1.ico"/>
<title>Login or Registration</title>
<script src="validatelogin.js"></script>
<link rel="stylesheet" type="text/css" href="page1.css" />

</head>

<body style="width:100%; font-family:'Arial';background-color:#f0f0f0; font-size:0.5em;">
<div id="header-wrap">
   <div id="image">
   	<div id="itext">
  	Social networking website
	</div>
   </div>
</div>



<div id="container">
<h1>Social Networking Website</h1>
	<h2>For Social Awareness</h2>
<div id="col1">
<div id="login">
<font face="Arial" size="5">Login</font>
<hr width="30%" style=" border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    margin-left:-7%; " align="left"/>
	</div>
<table cellspacing="12">
<form name="login" method="post" action="loginvalidate.php" onsubmit="return validatelogin(this)">


<tr><td><br></td><td><br></td></tr>

<tr>
<td><label for="email">E-mail:</label></td>
<td><input type="text" name="email" id="email" size="28" class="tb7"/></td><td style="width:200px;"><p id="validateemail"></p></td>
</tr>

<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" name="password" id="password" size="28" class="tb7"/></td><td style="width:250px;"><p id="pass"></p></td>
</tr>
</table>


<table><tr><td><br/></td><td><p id="wrong" style="width:300px;"></td></p></tr></table>

<div id="buttons">
<div id="b1">
<input type="image" src="login.png" onmouseover="this.src='loginmo.png'" onmouseout="this.src='login.png'" alt="submit" height="45" width="80"  />
<input type="hidden" name="submit" value="submit"/>
</form>
</div>

<div id="b2">

<font size="2px">or</font>

<a href="register.php" id="reg">Go for registration</a>


</div><!--b2 ends-->
</div><!--buttons ends-->

<div id="quote">
<img src="quote.png"/>
</div>

</div><!--column 1 ends-->


<div id="col2">

<img src="homepage.jpg" />

</div>


</div><!--Container ends-->


<?php
    include_once('session.php');

	if(isset($_SESSION['email']))
	{
		header('Location: profile.php');
	}
	
?>



</body>
</html>