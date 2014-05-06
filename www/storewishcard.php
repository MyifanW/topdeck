<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','root','','434_db');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT into wishlist values('joe', '".$q."')");

echo "INSERT into wishlist values('joe', '".$q."')";
mysqli_close($con);
?>