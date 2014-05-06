<?php
$con = mysqli_connect('localhost','root','','434_db');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * from collections");

$newHTML = "<table class=\"table\">";
echo $newHTML;
while($row = mysqli_fetch_array($result)) 
{
	$newHTML = $newHTML."<tr><td><div id=\"".$row['card']."\">";
	
	$newHTML = $newHTML."<button id=\"cardButton\" type=\"button\" class=\"btn btn-default\" onclick=preview(\"+encodeURIComponent(prev)+\")>".$row['card']."</button>";
	$newHTML = $newHTML."<div><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=storeCard(";
	$newHTML = $newHTML."\"+encodeURIComponent(cname)+\"";
	$newHTML = $newHTML.")>Remove</button></div>";
	$newHTML = $newHTML."</tr></div>";
}

echo $newHTML;

mysqli_close($con);
?>