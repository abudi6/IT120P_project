<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['student_email'];
		$password = $_POST['student_password'];

		if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "select * from students where student_email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['student_password'] === $password)
					{

						$_SESSION['student_id'] = $user_data['student_id'];
						header("Location: student/student_dashboard.php");
						die;
					}
				}
			}
			
			header("Location: login.php?error=Incorrect User name or password!");
		}else
		{
			header("Location: login.php?error=Incorrect User name or password!");
		}
	}

    function function_alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
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
                            <p>New Student?</p>
                            <center><a href="signup.php" class="btn">ENROLL NOW</a></center>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <form method="post">
                            <div class="input-box">
                            <header>WELCOME</header>
                            <?php if (isset($_GET['error'])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>

                            <?php } ?>
                            <div class="input-field">
                                <input type="text" class="input" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="SIGN IN">
                                
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