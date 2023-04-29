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
	<script src="https://kit.fontawesome.com/d8754e661c.js" crossorigin="anonymous"></script>
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
	<link rel="stylesheet" href="../../css/navbar.css"/>
</head>
<body>

	<!-- <a href="logout.php">Logout</a>
	<h1>This is the index page<?php echo $user_data['student_name']; ?></h1>

	<br>
	Hello, <?php echo $user_data['student_name']; ?> -->

	
<div class="wrapper">
    <div class="sidebar">
      <div class="bg_shadow"></div>
        <div class="sidebar__inner">
           <div class="close">
          <i class="fas fa-times"></i>
        </div>
		<div class="logo">
		<img class="logo_img" src="../../assets/icons/logo.png"><br>
			E-LEARNSTER
		</div>
		<hr class="solid">
        <div class="profile_info">
            <div class="profile_img">
			<img src="../../assets/profile_images/<?php echo $user_data['student_picture']; ?>">
            </div>
            <div class="profile_data">
                <p class="name"><?php echo $user_data['student_name']; ?></p>  
                <p class="role"><?php echo $user_data['student_program']; ?></p>
            </div>
        </div>
        <ul class="siderbar_menu">
            <li><a href="#" class="active">
              <div class="icon"><i class="fa-solid fa-house"></i>  Dashboard</div>
              
              </a></li>  
          <li><a href="#">
              <div class="icon"><i class="fa-sharp fa-solid fa-user"></i>  Profile</div>
              
              </a></li>  
		  <li><a href="#" >
              <div class="icon"><i class="fa-sharp fa-solid fa-book"></i>  Courses</div>
              
              </a></li>  
		  <li><a href="#">
              <div class="icon"><i class="fa-solid fa-check-double"></i>  Grades</div>
              
              </a></li>  
          <li><a href="logout.php">
              <div class="icon"><i class="fa-solid fa-right-from-bracket"></i>  Logout</div>
              
              </a></li>   
        </ul>
      </div>
    </div>
    <div class="main_container"> 
		<div class="top_navbar">
			<div class="hamburger">
				<div class="hamburger__inner">
					<i class="fas fa-bars"></i>  
				</div>  
			</div>
			<ul class="menu">
				<img class="logo_img" src="../../assets/icons/logo2.png"><b>E-LEARNSTER</b>
         	</ul>
		</div>
      <div class="container">
        <div class="announcement">
			<p class="container_name"><h1>ANNOUNCEMENTS  <i class="fa-regular fa-newspaper"></i></h1></p>
          	<div></div>
        </div>
		<div class="sub_container">
			<div class="current_classes">
				<p class="container_name"><h1>CURRENT CLASSES  <i class="fa-solid fa-book-open"></i></h1></p>
			</div>
			<div>
				<div class="due_dates">
					<p class="container_name"><h1>UPCOMING DUES  <i class="fa-regular fa-calendar"></i></h1></p>
				</div>
			</div>
		</div>
      </div>
      
    </div>
</div>
</body>
</html>