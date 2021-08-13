<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";

$conn=mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
	echo "Connection successful!";
}
else
{
	die("Connection error!".sqli_connect_error());
}

?> 