<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login_admin($con);

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
	<title>E-LEARNSTER: Web-based Learning Management System | Admin Dashboard</title>

	<!-- css file link -->
	<link rel="stylesheet" href="../../css/content.css"/>
    <link rel="stylesheet" href="../../css/content_add.css"/>
</head>
<body>

	
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
			<img src="../../assets/profile_images/<?php echo $user_data['employeeProfilePicture']; ?>">
            </div>
            <div class="profile_data">
                <p class="name"><?php echo $user_data['employeeName']; ?></p>  
                <p class="role"><?php echo $user_data['employeeTitle']; ?></p>
            </div>
        </div>
        <ul class="siderbar_menu">
            <li><a href="admin_dashboard.php" class="active">
              <div class="icon"><i class="fa-solid fa-house"></i>  Dashboard</div>
              
              </a></li>  
          <li><a href="profile.php">
              <div class="icon"><i class="fa-sharp fa-solid fa-user"></i>  Profile</div>
              
              </a></li>  
		  <li><a href="user_management.php" >
              <div class="icon"><i class="fa-solid fa-users-gear"></i>  Manage Students</div>
              
              </a></li>  
		  <li><a href="content_management.php">
              <div class="icon"><i class="fa-solid fa-file-pen"></i>  Manage Content</div>
              
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
			<p class="container_name"><a style="color:black;" href="announcements.php"><h1>ANNOUNCEMENTS  <i class="fa-regular fa-newspaper"></i></h1></a></p>
            <div class="item">
                <h3> 
                    <?php 
                    $query = "SELECT * FROM announcements ORDER BY id DESC LIMIT 1";
                    $result = mysqli_query($con, $query); 
                    $data = mysqli_fetch_assoc($result);
                    echo $data['title']; 
                    ?>
                </h3> 
                    <?php
                    echo $data['description'];
                    ?>        
                    <h4 style="color:black; text-align:right;">
                        <?php echo $data['dateCreated'];?>
                    </h4>        

            </div>
        </div>
		<div class="sub_container">
			<div class="container1">
				<p class="container_name"><h1>TOTAL STUDENTS ENROLLED  <i class="fa-solid fa-users"></i></h1></p>
                <p class="container_body">
                    <?php 
                    $query = "select * from students";
                    $result = mysqli_query($con, $query); 
                    $rowcount=mysqli_num_rows($result)-1;
                    echo $rowcount;
                    ?>
                </p>
			</div>
			<div>
				<div class="container2">
					<p class="container_name"><h1>TOTAL COURSES AVAILABLE  <i class="fa-solid fa-book"></i></h1></p>
                    <p class="container_body">
                        <?php 
                        $query = "select * from courses";
                        $result = mysqli_query($con, $query); 
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?>                   
                    </p>    
				</div>
			</div>
		</div>
      </div>
      
    </div>
</div>
</body>
</html>