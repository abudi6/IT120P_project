<?php

session_start();

if(isset($_SESSION['employeeID']))
{
	unset($_SESSION['employeeID']);

}

header("Location: ../login.php");
die;