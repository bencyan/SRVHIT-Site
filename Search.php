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

$string =  $_REQUEST['searchtags'];;
$token = strtok($string, ", ");

while ($token !== false)
{
	$qry = "SELECT * FROM students WHERE Tags LIKE '%$token%'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	printf ("%s %s (%s)\n",$row["Name"],$row["Email"],$row["Summary"]);
	$token = strtok(", ");
}

?>