<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login_admin($con);
    

    if(isset($_POST['submit'])) {
        $studentName = $_POST['studentName'];
        $studentEmail = $_POST['studentEmail'];
        $studentPassword = $_POST['studentPassword'];
        $studentPhone = $_POST['studentPhone'];
        $studentAddress = $_POST['studentAddress'];
        
        $sql = "SELECT * FROM students WHERE studentEmail = '$studentEmail'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        
        // Update user information in database
        $sql = "UPDATE students SET studentName = '$studentName', studentEmail = '$studentEmail', studentPassword = '$studentPassword', studentPhone = '$studentPhone', studentAddress = '$studentAddress' WHERE studentEmail = '$studentEmail'";
        if(mysqli_query($con, $sql)) {
            header("Location: admin_dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    
    

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
            <li><a href="admin_dashboard.php" >
              <div class="icon"><i class="fa-solid fa-house"></i>  Dashboard</div>
              
              </a></li>  
          <li><a href="profile.php" >
              <div class="icon"><i class="fa-sharp fa-solid fa-user"></i>  Profile</div>
              
              </a></li>  
		  <li><a href="user_management.php" class="active">
              <div class="icon"><i class="fa-solid fa-users-gear"></i>  Manage Students</div>
              
              </a></li>  
		  <li><a href="content_management.php">
              <div class="icon"><i class="fa-solid fa-file-pen"></i>  Manage Content</div>
              
              </a></li>  
          <li><a href="messaging.php">
              <div class="icon"><i class="fa-solid fa-envelope"></i>  Messaging</div>
              
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

            <div class="contentbody">
                <div align=center>
                    <h1>UPDATE STUDENT INFORMATION</h1>
                    
                    <form method="post" enctype="multipart/form-data">
                            <div class="input-box">
                                <div class="input-field">
                                    <input type="text" class="input" name="studentName" required>
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="studentEmail" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="studentPassword" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="studentPhone" required>
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="studentGender" required>
                                    <label for="gender">Gender</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="studentAddress" required>
                                    <label for="address">Address</label>
                                </div>
                                <div class="input-field">
                                <input type="submit" class="submit" name="submit" value="UPDATE">
                                
                                </div>
                            </div>
                    </form>
                </div>  
            </div>

        </div>
    </div>
</div>
</body>
</html>