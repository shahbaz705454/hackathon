<?php

if ($_SERVER['REQUEST_METHOD']== 'POST'){
$name= $_POST['name'];
$email= $_POST['email'];
$pass =  $_POST['password'];

$conn = mysqli_connect('localhost','root','','shahbazusers') or die('connection error');


$sql="INSERT INTO `login`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
$result=mysqli_query($conn,$sql);

if($result){
    
   echo "Account has been created";
    
    
}

else{
    
    echo "error while making ac".mysqli_error($conn);
}
}










?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="singup.css">
    <title>login page</title>
</head>
<section>

    <body>
        <div class="color"> </div>
        <div class="color"> </div>
        <div class="color"> </div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--1:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form" >
                    <h2>SIGN UP</h2>
                    <form action="" method="post">
                        <div class="inputBox">
                            <input type="text" placeholder="Name" name="name">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Email Id" name="email">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Password" name="password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="login">
                        </div>
                        <div class="forget">
                            
                            <p class="singup">Already have account ? <a href="login.php">Login</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>
</body>

</html>
