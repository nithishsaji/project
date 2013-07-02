<?php
$uname=$_POST["login_id"];
$pass=$_POST["password"];

$myServer = "localhost";
$myUser = "root";
$myPass = "";
$myDB = "webapp"; 

//connection to the database
$dbhandle = mysqli_connect($myServer, $myUser, $myPass,$myDB)
  or die("Couldn't connect to SQL Server on $myServer"); 



//declare the SQL statement that will query the database
$query = "SELECT username,password";
$query .= "FROM user";
$query .= "WHERE username='$uname'"; 



if (!mysqli_query($dbhandle,$query))
  {
  die('Error: ' . mysqli_error($dbhandle));
  }


  $dbhandle->store_result();
  $num_of_rows = $dbhandle->num_rows;
  echo($num_of_rows);

//close the connection
mysqli_close($dbhandle);
?>