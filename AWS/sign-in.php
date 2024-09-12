<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to the Login page</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="login.js"></script>
    </head>
    <body bgcolor="black">
        <?php
            include("connection.php");
            if(!empty($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "select * from login where username='$username' and password='$password'";
                $res = mysqli_query($conn, $query);
                $count = mysqli_num_rows($res);
                if($count==1){
                    header("Location: index2.php");
                    exit;
                }
                else{
                    echo '<script>alert("Wrong Credentials")</script>';
                }
            }
        ?>
        <!--?php
            $picture = 'bck.jpg';
        ?-->
        <style>
            <?php include "sign-in.css"?>
            .container{
                background-image: url(<?php echo $picture;?>);
            }
        </style>
            <div class="container">
                <div class="main"> </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
			    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
			    <script type="text/javascript">
				    VANTA.GLOBE({
					    el: "body",
				        mouseControls: true,
				        touchControls: true,
			            gyroControls: false,
				        minHeight: 200.00,
				        minWidth: 200.00,
				        scale: 1.00,
				        scaleMobile: 1.00,
				        color: 0x0006b5,
				        color2: 0x0385d3,
				        backgroundColor: 0x000000
		    	    })
				</script>
                <div class="welcome">Sign-In</div>
                <form method="post" class="form">
                    <input type="text" class="credentials" id="username" placeholder="Username" name="username" required>
                    <input type="password" class="credentials" id="psswrd" placeholder="Password" name="password" required>
                    <input type="submit" value="Login" class="loginbutton" name="login">
                    <div style="position:absolute; left:41.6%; top:72%;">
                        <a style="color:white; display:inline-block;">Forgot password?</a>
                        <a class='link' href='change_password.php'><b>Change your password</b></a></br>
                    </div>
                    <div style="position:absolute; left:41.6%; top:74.6%;">
                        <a style="color:white; display:inline-block;">Don't have an account?</a>
                        <a class='link' href='signup.php'><b>Create an account</b></a>
                    </div>
                </form>
            </div>
    </body>
</html>