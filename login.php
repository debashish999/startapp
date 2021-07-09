<?php

$login = false;
$showerror = false;

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    include 'connections/connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM `users` WHERE (`username` = '$username' OR `email` = '$username') 
    AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        // header('location: dashboard.php');
        echo 'logged in';
    }

    else{
        $showerror = 'invalid credintials';
        echo 'invalid credintials';
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
            <link rel="stylesheet" type="text/css" href="css/log.css"/>

        <title>login</title>
    </head>

    <body>
        <div class="container">

            <h2>Sign in</h2>


        <form method="POST" action="">
        <div>
        <input type="text" placeholder="Username" id="username" name='username' required/>
        </div>
        <div>
        <input type="password", placeholder="password", id = 'password' name="password" required />
    </div>

    <div>
        <input type="submit" value="Login" id ='log' onclick = "logValidate()"/>
    </div>
    <font id='msg'></font>

    <div style="color: grey" class="last">
        Create a Account?<b>
        <a href="signup.php" >Register</a></b>
    </div>
    <script src="js/logup.js"></script>
    </form>
    </div>
    </body>
</html>