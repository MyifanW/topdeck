<?php
$con = mysqli_connect('localhost','root','','434_db');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * from events;");

while($row = mysqli_fetch_array($result)) 
{
	echo $row['event'];
	echo ",";
}


mysqli_close($con);
?>