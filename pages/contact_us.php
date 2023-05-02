<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "pinedaandreamaym@gmail.com"; // Replace with your email address
    $subject = $_POST['subject'];
    
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send email
    if(mail($to, $subject, $body)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>E-LEARNSTER: Web-based Learning Management System</title>

        <!--custom links-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!--css file link-->
        <link rel="stylesheet" href="../css/navbar_footer.css" />
        <link rel="stylesheet" href="../css/contact_us.css" />

    </head>
    <body>
        <!-- Navigation bar -->
        <nav>
            <div class="logo">
                <a href="#"><img src="../assets/icons/logo.png" alt="logo">E-LEARNSTER</a>
            </div>
            <div class="toggle">
                <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
            </div>
            <ul class="menu">
                <li><a href="../index.html">HOME</a></li>
                <li><a href="about_us.php">ABOUT US</a></li>
                <li><a href="contact_us.php">CONTACT US</a></li>
                <li><a href="login.php">CONNECT</a></li>
            </ul>
        </nav>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script>

            $(function(){
                $(".toggle").on("click", function(){
                    if($(".menu").hasClass("active")){
                        $(".menu").removeClass("active");
                        $(this).find("a").html("<ion-icon name='menu-outline'></ion-icon>");
                    } else{
                        $(".menu").addClass("active");
                        $(this).find("a").html("<ion-icon name='close-outline'></ion-icon>");
                    }
                })
            });

        </script>

        <!-- Section 1 -->
        <section class="home" id="home">
            <div class="container_form">
            <div class="text">Contact us Form</div>
                <form method="post">
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" name="name" required>
                        <div class="underline"></div>
                        <label for="">Full Name</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" name="email" required>
                        <div class="underline"></div>
                        <label for="">Email Address</label>
                    </div>
                    <div class="input-data">
                        <input type="text" name="subject" required>
                        <div class="underline"></div>
                        <label for="">Subject Title</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data textarea">
                        <textarea rows="8" cols="80" name="message" required></textarea>
                        <br />
                        <div class="underline"></div>
                        <label for="">Write your message</label>
                        <br />
                        <div class="form-row submit-btn">
                            <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" name="submit" value="submit">
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>

        </section>
        
        <!--- Footer --->
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>QUICK LINKS</h3>
                            <ul>
                                <li><a href="../index.html">HOME</a></li>
                                <li><a href="about_us.php">ABOUT US</a></li>
                                <li><a href="contact_us.php">CONTACT US</a></li>
                                <li><a href="login.php">CONNECT</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item item">
                            <h3>PROJECT TEAM</h3>
                            <ul>
                                <li>ABDURAHMAN AZZOUNI</li>
                                <li>ROSANNE ERPELO</li>
                                <li>JOSHUA SAM PICATO</li>
                                <li>JUSTIN GEORGE TALAVERA</li>
                                <li>ANDREA MAY PINEDA</li>
                            </ul>
                        </div>
                        
                        <div class="col item social">
                            <a href="#" target=”_blank”><i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                            <a href="#" target=”_blank”><i class="fa fa-twitter-square"></i></a>    
                            <a href="#" target=”_blank”><i class="fa fa-instagram"></i></a>                       
                        </a></div>
                    </div>
                    <p class="copyright">E-LEARNSTER © 2023  All Rights Reserved.<br>FOPI01 3Q2223</p>
                </div>
            </footer>
        </div>
    </body>



</html>