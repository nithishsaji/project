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
$query = "SELECT username FROM user WHERE username='".mysql_real_escape_string($uname)."'"; 

echo "$query </br>";

if (!mysqli_query($dbhandle,$query))
  {
  die('Error: ' . mysqli_error($dbhandle));
  }
else {

if ($stmt = mysqli_prepare($dbhandle, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));

    /* free result */
    mysqli_stmt_free_result($stmt);

    /* close statement */
    mysqli_stmt_close($stmt);
}
}
//close the connection
mysqli_close($dbhandle);
?>