<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>\
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script>
    	$(document).ready(function(){
    		$(".hamburger .fas").click(function(){
		    	$(".wrapper").addClass("active")
			})

			$(".wrapper .sidebar .close").click(function(){
		    	$(".wrapper").removeClass("active")
			})
    	})
    </script>
	<title>E-LEARNSTER: Web-based Learning Management System | Student Dashboard</title>

	<!-- css file link -->
	<link rel="stylesheet" href="../../css/student_navbar.css"/>
</head>
<body>

	<!-- <a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['student_name']; ?> -->

	<div class="wrapper">

		<div class="sidebar">
		<div class="bg_shadow"></div>
			<div class="sidebar__inner">
			<div class="close">
			<i class="fas fa-times"></i>
			</div>
			<div class="profile_info">
				<div class="profile_img">
				<img src="../../assets/profile_images/?php echo $user_data['student_picture']; ?>">
				</div>
				<div class="profile_data">
					<p class="name">Alex John</p>  
					<p class="role">UI Developer</p>
					<div class="btn">Update Profile</div>
				</div>
			</div>
			<ul class="siderbar_menu">
				<li><a href="#">
				<div class="icon"><i class="fas fa-laptop"></i></div>
				<div class="title">Dashboard</div>
				</a></li>  
			<li><a href="#" class="active">
				<div class="icon"><i class="fas fa-newspaper"></i></div>
				<div class="title">Jobs</div>
				</a></li>  
			<li><a href="#">
				<div class="icon"><i class="fas fa-file-alt"></i></div>
				<div class="title">Documents</div>
				</a></li>  
			<li><a href="#">
				<div class="icon"><i class="fas fa-cog"></i></div>
				<div class="title">Settings</div>
				</a></li>  
			<li><a href="#">
				<div class="icon"><i class="fas fa-question-circle"></i></div>
				<div class="title">Help</div>
				</a></li>  
			</ul>
		</div>
		</div>

	</div>
</body>
</html>