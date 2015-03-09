<?php
$server="localhost";
$user="root";
$db="members";

$con = mysql_connect($server,$user);
if(!$con) die("Cannot Connect".mysqli_error());
mysql_select_db($db,$con); //OR die ("Cannot connect to database" . mysql_error());

?>