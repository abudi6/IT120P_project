<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login_admin($con);
    $user_id = $user_data['id'];
    if(isset($_POST['submit'])) {
        $employeeName = $_POST['employeeName'];
        $employeeEmail = $_POST['employeeEmail'];
        $employeePassword = $_POST['employeePassword'];
        $employeePhone = $_POST['employeePhone'];
        $employeeAddress = $_POST['employeeAddress'];
        
        // Update user information in database
        $sql = "UPDATE employees SET employeeName = '$employeeName', employeeEmail = '$employeeEmail', employeePassword = '$employeePassword', employeePhone = '$employeePhone', employeeAddress = '$employeeAddress' WHERE id = '$user_id'";
        if(mysqli_query($con, $sql)) {
            header("Location: admin_dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    
    $sql = "SELECT * FROM employees WHERE id = '$user_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

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
          <li><a href="profile.php" class="active">
              <div class="icon"><i class="fa-sharp fa-solid fa-user"></i>  Profile</div>
              
              </a></li>  
		  <li><a href="user_management.php" >
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
                    <h1>UPDATE USER INFORMATION</h1>
                    <?php if ($user_data) { ?>
                    <form method="post" enctype="multipart/form-data">
                            <div class="input-box">
                                <div class="input-field">
                                    <input type="text" class="input" name="employeeName" value="<?php echo $user_data['employeeName']; ?>" required>
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="employeeEmail" value="<?php echo $user_data['employeeEmail']; ?>" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="employeePassword" value="<?php echo $user_data['employeePassword']; ?>" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="employeePhone" value="<?php echo $user_data['employeePhone']; ?>" required>
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" class="input" name="employeeAddress" value="<?php echo $user_data['employeeAddress']; ?>" required>
                                    <label for="address">Address</label>
                                </div>
                                <div class="input-field">
                                <input type="submit" class="submit" name="submit" value="UPDATE">
                                
                                </div>
                            </div>
                    </form>
                    <?php }?>
                </div>
                   

            </div>

        </div>
    </div>
</div>
</body>
</html>