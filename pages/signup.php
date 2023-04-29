<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['studentName'];
        $email = $_POST['studentEmail'];
        $password = $_POST['studentPassword'];

		if(!empty($name) && !empty($password) && !is_numeric($name) && filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            
			//save to database
			$student_id = random_num(20);
			$query = "insert into students (studentID,studentEmail,studentName,studentPassword) values ('$student_id','$email','$name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>E-LEARNSTER: Web-based Learning Management System | Log-in</title>

        <!-- css file link -->
        <link rel="stylesheet" href="../css/login_register.css"/>

    </head>
    <body>

        
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                        <!--Image-->
                        <p class="side-logo" href=""><img src="../assets/icons/logo.png" alt="logo"><br>E-LEARNSTER</p>
                        <p class="subheading">Quality Education without Boundaries</p>
                        
                        <div class="text">
                            <p>Already enrolled?</p>
                            <center><a href="login.php" class="btn">CONNECT NOW</a></center>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <form method="post">
                            <div class="input-box">
                            <header>ENROLL</header>
                            <div class="input-field">
                                <input type="text" class="input" id="text" name="name" required autocomplete="off">
                                <label for="email">Full Name</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="text" name="email" required autocomplete="off">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="SIGN UP">
                                
                            </div>
                            <div class="signin">
                                <span>Forgot your password? <a href="#">Go here</a></span>
                            </div>
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </div>
        

    </body>

</html>