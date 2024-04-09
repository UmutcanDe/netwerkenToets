<?php

$dbhost = 'localhost:3306';
$dbuser = '';
$dbpass = '';
$dbname = 'netwerken_2024';

$conn = new mysqli($dbhost,$dbuser);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>