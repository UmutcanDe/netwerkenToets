<?php

$dbhost = 'localhost:3306';
$dbuser = 'net24udemirez_netwerken_user_2024';
$dbpass = 'netwerken2024!';
$dbname = 'net24udemirez_netwerken_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>