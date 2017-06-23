<!DOCTYPE html>
<?php 
session_start();
?> 
<html>
<body>

<h1>My first PHP page</h1>

<p>
<?php #php tag
$link = mysqli_connect("localhost", "root", "", "student");
if (!$link) 
{ 
  $output = 'Unable to connect to the database server.'; 
  exit(); 
} 
echo 'Connection established';
echo  "<br>";
if (!mysqli_set_charset($link, 'utf8')) 
{ 
  $output = 'Unable to set database connection encoding.'; 
  exit(); 
} 
echo 'Charset established, database selected';
echo  "<br>";
echo 'Database connected.';
echo  "<br>";
$summary = $_GET["summary"];
$interests = $_GET["interests"];
$experienceHeader = $_GET["experienceHeader"];
$experienceDescription = $_GET["exeprienceDescription"];
$extracurricular = $_GET["extracurricular"];
$name = $_GET["studentName"];
$username = $_GET["studentEmail"];
$password = $_GET["Password"];
$vpass = $_GET["vPassword"];
$email = $_GET["studentEmail"];
$college = $_GET["College"];
$major = $_GET["Major"];
$tags = $_GET["studentTags"];
$_SESSION["name"] = $name;
$_SESSION["college"] = $college;
$_SESSION["major"] = $major;
$_SESSION["email"] = $email;
$_SESSION["areasOfKnowledge"] = $tags;
$_SESSION["summary"] = $summary;
$_SESSION["interests"] = $interests;
$_SESSION["experienceHeader"] = $experienceHeader;
$_SESSION["experienceDescription"] = $experienceDescription;
$_SESSION["extracurricular"] = $extracurricular;
 

$name = mysql_real_escape_string($name);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$vpass = mysql_real_escape_string($vpass);
$email = mysql_real_escape_string($email);

$sql = "INSERT INTO students (Name, UserName, Password, Email, College, Major, Tags, Summary)
VALUES ('$name', '$username', '$password', '$email', '$college', '$major', '$tags', '$summary')";
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
    header ("Location: student_dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?> <!-- End of php tag -->
</p>
</body>
</html>


<!--# Creating a new table code
#----------------------------------------
#$sql = 'CREATE TABLE Businesses (  
#      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,  
#      Name TEXT,  
#      UserName Text,
#	  Password Text,
#      Email Text,
#      Summary Text	  
#    ) DEFAULT CHARACTER SET utf8';  
#if (!mysqli_query($link, $sql))  
#{  
#  echo  'Error creating Businesses table: ' . mysqli_error($link); 
#  exit();  
#}    
#echo 'Businesses table successfully created.'; 
#echo  "<br>";

# Updating tables code
#------------------------------------
#$sql = 'UPDATE Businesses SET Name="HP"  
#    WHERE id LIKE "%1%"'; 
#if (!mysqli_query($link, $sql))  
#{  
#  echo 'Error performing update: ' . mysqli_error($link);  
#  exit();  
#}
-->
