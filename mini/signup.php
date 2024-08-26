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
                $name = mysqli_real_escape_string($conn,$_POST['name']);
                $username = mysqli_real_escape_string($conn,$_POST['username']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $phone = mysqli_real_escape_string($conn,$_POST['number']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $query = "insert into login (Id,Name,username,password,phone,email) values ('','$name','$username','$password',$phone,'$email')";
                $res = mysqli_query($conn, $query);
                echo '<script>alert("Account created")</script>';
                header("Location: home2.php");
            }
        ?>
        <style>
            <?php include "signup.css"?>
            .container{
                background-image: url(<?php echo $picture;?>);
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
				<script type="text/javascript">
				VANTA.NET({
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
				<script type="text/javascript" src="vanilla-tilt.js"></script>
            <div class="container">
                <div class="main"> </div>
                <div class="welcome">SignUp</div>
                <form method="post" class="form">
                    <input type="text" class="credentials" id="name" placeholder="Name" name="name" required>
                    <input type="text" class="credentials" id="username" placeholder="Username" name="username" required>
                    <input type="password" class="credentials" id="psswrd" placeholder="Password" name="password" required>
                    <input type="number" class="credentials" id="number" placeholder="Phone No" name="number" required>
                    <input type="text" class="credentials" id="email" placeholder="Email" name="email" required>
                    <input type="submit" value="LogIn" class="loginbutton" name="login">
                </form>
            </div>
    </body>
</html>