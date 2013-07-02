<?php
print_r($_POST);

$uname=$_POST["login_id"];
$pass=$_POST["password"];
$email=$_POST["email"];

echo "Form submitted";


   $db = mysqli_connect("localhost", "root", "","webapp");


   if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="INSERT INTO user VALUES('$uname',PASSWORD('$pass'),'$email')";

  echo "</br>";
  
  if (!mysqli_query($db,$sql))
  {
  die('Error: ' . mysqli_error($db));
  }
echo "Response Recorded";

mysqli_close($db);


?>