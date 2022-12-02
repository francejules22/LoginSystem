<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "signin_page";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    $sql="SELECT * FROM `users` WHERE user = '$uname' AND  pass = '$pwd' limit 1";
   
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 1) {
        echo "The user does exist in the Database";
    } else {
        echo "The user does not exist in the Database";
        exit();
    }
}

if(!$conn){
   die("Connection Failed: ".mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>SignIn & CreateAccount</title>
</head>
<body>
       <div class="account-container" id="account-container">
             <div class="form-container sign-up-container">
                 <form action="#">
                    <h1>Create an Account</h1>
                    <div class="social-container">
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <span>Use your email for registration</span>
                    <input type="text" placeholder="Username"/>
                    <input type="email" placeholder="Email"/>
                    <input type="password" placeholder="Password"/>
                    <br />
                    <button>Sign Up</button>
                 </form>
             </div>

              <div class="form-container sign-in-container">
                   <form method="POST" action="">
                      <h1>Log In</h1>
                         <div class="social-container">
                            <a href="#">
                               <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#">
                              <i class="fab fa-google"></i>
                            </a>
                            <a href="#">
                              <i class="fab fa-github"></i>
                           </a>
                       </div>
                       <span>Signin To your Account</span>
                       <input type="text" placeholder="Email" name="username"/>
                       <input type="password" placeholder="Password" name="password"/>
                       <a href="#">Forgot your Password?</a>
                       <button type="submit" name="login_btn" value="LogIn" >Log In</button>
                   </form>
             </div>


             <div class="overlay-container">
                  <div class="overlay">
                      <div class="overlay-panel overlay-left">
                           <h1>Have Already Account?</h1>
                           <p>To keep connected with us please login your account here!</p>
                            <button class="ghost" id="signIn">Sign In</button>
                      </div>

                      <div class="overlay-panel overlay-right">
                          <h1>Create Your Account</h1>
                          <p>Enter your personal details and start journey with us</p>
                          <button class="ghost" id="signUp">Sign Up</button>
                      </div>

                  </div>
             </div>
       </div>
</body>
     <script src="script.js"></script>
</html>