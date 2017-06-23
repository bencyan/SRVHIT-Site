<?php
session_start();
$link = mysql_connect("localhost", "root", "procrastination");
mysql_select_db("student", $link);
if (!$link) 
{ 
  exit(); 
} 
echo 'Connection established';
echo  "<br>";
echo 'Database connected.';
echo  "<br>";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$qry="SELECT * FROM businesses WHERE Email='$username' AND Password='$password'";
$login = mysql_query($qry, $link);
$num_row = mysql_num_rows($login);
$row=mysql_fetch_array($login);
if($num_row > 0) {
	echo "Login Successfull";
	$_SESSION['username']=$row['username'];
	header("Location:company_profile_page.html");
}
else
{
	echo "Login Unsuccessful";
}
?>