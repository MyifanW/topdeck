<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','','','434_db');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT into collections values('joe', '"+ $q +"'");

mysqli_close($con);
?>