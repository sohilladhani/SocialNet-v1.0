<html>
<head>
<title>Member's database</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root");
if(!$con) die("Connection failed" . mysql_error());

mysql_select_db("members",$con);

$result= mysql_query("SELECT * FROM members");

echo "<center>
	  <table border='1'><caption><b>Member's Data</b></caption>
	  <tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Password</th></tr>";


while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['ID']. "</td>";
	echo "<td>" . $row['Name']. "</td>";
	//echo "<td>" . $row['Username'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
	echo "<td>" . $row['Gender']. "</td>";
	echo "<td>" . $row['Password']. "</td>";
	echo "</tr>";
}
echo "</table> </center>";

mysql_close($con);
?>

</body>
</html>