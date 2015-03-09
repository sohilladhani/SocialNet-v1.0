
<html>
<head>
<link rel="shortcut icon" href="favicon1.ico"/>
<link rel="stylesheet" type="text/css" href="register.css"/>
<title>Registration Form</title>
<style type="text/css">
h
{
    font-size:0.8em;
    color:red;
    font-weight:normal;
}
</style>

<script src="validate.js"></script>

</head>

<body style="width:70%; font-family:'Arial';background-color:#f0f0f0; font-size:0.5em;">

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
</div>
<div id="col1">

<font face="Arial" size="5">Create an account</font>
<hr width="38%" style=" border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    margin-left:-5%;" align="left"/>

<table  cellspacing="12" >
<form name="signup" method="post"  action="registerform.php" onsubmit="return validate(this)">


<tr><td><br></td><td><br></td></tr>

<tr>
<td><label for="name1">Name:<font color='red'>*</font></label></td>
<td><input type="text" name="name1" id="name1" size="28" class="tb7" /></td><td style="width:200px;"><p id="name"></p></td>
</tr>

<tr>
<td><label for="email">E-mail:<font color='red'>*</font></label></td>
<td><input type="text" name="email" id="email" size="28" class="tb7"/></td> <td style="width:200px;"><p id="validateemail"></p></td>
</tr>

<tr>
<td><label for="gender">Gender:<font color='red'>*</font></label></td>
<td>
<select name="gender" class="tb71">
<option selected>Please Choose---</option>
<option>Female
<option>Male
</select>
</td>
<td style="width:200px;"><p id="gender"></p></td>
</tr>

<tr>
<td><label for="password">Password:<font color='red'>*</font></label></td>
<td><input type="password" name="password" id="password" size="28" class="tb7"></td><td style="width:250px;"><p id="pass"></p></td>
</tr>

<tr>
<td><label for="repassword">Re-enter Password:<font color='red'>*</font></label></td>
<td><input type="password" name="repassword" id="repassword" size="28" class="tb7"/></td> <td style="width:200px;"><p id="inner" ></p></td>
</tr>

<tr>
<td><label for="dob">Date of Birth:<font color='red'>*</font></label></td>
<td>

<select name="date" class="tb72">
    <option> Date </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>

<select name="month" class="tb73">
    <option> Month 
    <option value="01">Jan</option>
    <option value="02">Feb</option>
    <option value="03">Mar</option>
    <option value="04">Apr</option>
    <option value="05">May</option>
    <option value="06">Jun</option>
    <option value="07">Jul</option>
    <option value="08">Aug</option>
    <option value="09">Sep</option>
    <option value="10">Oct</option>
    <option value="11">Nov</option>
    <option value="12">Dec</option>
</select>


<select name="year" class="tb72">
    <option> Year </option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
    <option value="1938">1938</option>
    <option value="1937">1937</option>
    <option value="1936">1936</option>
    <option value="1935">1935</option>
    <option value="1934">1934</option>
    <option value="1933">1933</option>
    <option value="1932">1932</option>
    <option value="1931">1931</option>
    <option value="1930">1930</option>
    <option value="1929">1929</option>
    <option value="1928">1928</option>
    <option value="1927">1927</option>
    <option value="1926">1926</option>
    <option value="1925">1925</option>
    <option value="1924">1924</option>
    <option value="1923">1923</option>
    <option value="1922">1922</option>
    <option value="1921">1921</option>
    <option value="1920">1920</option>
    <option value="1919">1919</option>
    <option value="1918">1918</option>
    <option value="1917">1917</option>
    <option value="1916">1916</option>
    <option value="1915">1915</option>
    <option value="1914">1914</option>
    <option value="1913">1913</option>
    <option value="1912">1912</option>
    <option value="1911">1911</option>
    <option value="1910">1910</option>
    <option value="1909">1909</option>
    <option value="1908">1908</option>
    <option value="1907">1907</option>
    <option value="1906">1906</option>
    <option value="1905">1905</option>
    <option value="1904">1904</option>
    <option value="1903">1903</option>
    <option value="1902">1902</option>
    <option value="1901">1901</option>
    <option value="1900">1900</option>
</select>

</td>

<td style="width:150px;"><p id="dob" ></p></td>

<tr></tr>


</table>

<div id="buttons">
<div id="b1">
<input type="image" src="register.png" onmouseover="this.src='registermo.png'" onmouseout="this.src='register.png'" alt="submit" height="45" width="80" style="margin-left:24%;"/>
<input type="hidden" name="submit" value="submit"/></form>
</div>

<div id="b2">

<font size="2px">or</font>

<a href="login.php" id="login">Login</a>


</div><!--b2 ends-->
</div><!--buttons ends-->

<br/><br/><br/><br/><br/><br/>

<font color='red' size="3" style="margin-left:24%">*required fields</font>
</div>
</div>

<?php
include_once('session.php');
if(isset($_SESSION['email']))
    {
        header('Location: profile.php');
    }
?>


</body>
</html>
