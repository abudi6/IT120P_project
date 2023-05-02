<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$studentName = $_POST['studentName'];
        $studentEmail = $_POST['studentEmail'];
        $studentPassword = $_POST['studentPassword'];

		if(!empty($studentName) && !empty($studentPassword) && !is_numeric($studentName) && filter_var($studentEmail, FILTER_VALIDATE_EMAIL))
		{
            
			//save to database
			$student_id = random_num(10);
			$query = "insert into students (studentID,studentEmail,studentName,studentPassword) values ('$student_id','$studentEmail','$studentName','$studentPassword')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			header("Location: signup.php?error=Invalid Input!");
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
        <title>E-LEARNSTER: Web-based Learning Management System | Sign-up</title>

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
                            <?php if (isset($_GET['error'])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>

                            <?php } ?>
                            <div class="input-field">
                                <input type="text" class="input" id="text" name="studentName" required autocomplete="off">
                                <label for="name">Full Name</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="text" name="studentEmail" required autocomplete="off">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="text" name="studentPhone" required autocomplete="off">
                                <label for="phone">Contact Number</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="studentPassword" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="SIGN UP">
                                
                            </div>
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </div>
        

    </body>

</html>