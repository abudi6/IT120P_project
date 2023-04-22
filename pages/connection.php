<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lms_database";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed to connect!");
}
