<?php
$datainserted = false;
$usernameExist = false;
$emailExist = false;
$phoneExist =false;
$errormessage = '';
$phoneSize = false;

if($_SERVER["REQUEST_METHOD"] =='POST'){

        include 'connections/connect.php';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];



        if($usernameExist == false){
            $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
            $result = mysqli_query($conn, $sql);
        }
        if (mysqli_num_rows($result)>0){
            $usernameExist = 'user is already exist';
            
        }
        if($emailExist == false){
            $sql = "SELECT * FROM `users` WHERE `email` = 'email'";
            $result = mysqli_query($conn, $sql);
        }
        if (mysqli_num_rows($result)>0){
            $usernameExist = 'user is already exist';
        }
        if($usernameExist == false){
            $sql = "SELECT * FROM `users` WHERE `phone` = '$phone'";
            $result = mysqli_query($conn, $sql);
        }
        if (mysqli_num_rows($result)>0){
            $usernameExist = 'user is already exist';
        }
        if($password !=$cpassword){
            $errormessage = 'password doesnot match';
        }
        if(strlen($phone) != 10){
            $phoneSize = 'phone should be 10 digits';
        }


        if($password == $cpassword && $usernameExist == false && $emailExist == false && 
        $phoneExist ==false && $phoneSize == false){

        $sql  = "INSERT INTO `users` (`username`,`email`,`phone`,`password`) 
        VALUES ('$username','$email','$phone','$password')";
        
        $result = mysqli_query($conn, $sql);
        
        if($result){
            $datainserted = true;
            header('location: login.php');
        } 

    }
      
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="HTML, CSS, JavaScript">
            <meta name="author" content="John Doe">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/sign.css"/>

        <title>Signup</title>
    </head>   

    <body>
    <!-- <?php
   
    $alert = "<script>alert($usernameExist);</script>";
            echo $alert;
            ?> -->
        <div class="container">

            <h2>Sign up</h2>


        <form method="POST" action="">
        <div>
        <input type="text" placeholder="Username" id="username" name='username' required/>
        </div>
       
        <div>
            <input type="email" placeholder="E-mail" id="email" required name="email" />
        </div>
        <div>
            <input type="phone" placeholder="phone" id="phone" required name="phone" />
        </div>
        <div>
        <input type="password", placeholder="password", id = 'password' name="password" />
    </div>

    <div>
        <input type="password", placeholder="Confirm password", id="cpassword", name = 'cpassword'/>
    </div>

    <div>
        <input type="submit" value="Register" id ='reg' onclick="FormCheck()"/>
        
    </div>
    <font id="msg"></font>

    <div style="color: grey" class="last">
        Already have an account?<b>
        <a href="login.php" onclick="logValidate()">Login</a></b>
    </div>
    <script src="js/sigup.js"></script>
    </form>
    </div>
    </body>
</html>