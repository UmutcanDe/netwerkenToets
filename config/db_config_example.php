<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'netwerken2024!';
$dbname = 'net24udemirez_netwerken_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>