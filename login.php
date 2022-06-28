<?php
session_start();
$err = "";
$con = mysqli_connect('localhost', 'root', '', 'shahbazusers') or die('conn errrr');

if (isset($_POST['btn'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $sql = "SELECT * FROM login WHERE email = '$user' AND password = '$pass'";
    $q = mysqli_query($con, $sql);
    $num = mysqli_num_rows($q);
    if ($num == 1) {
        $_SESSION['login'] = $user;
        header('location:index.html');
    } else {
       echo $err = "Inalid Username or password or Create new account";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
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
                <div class="form">
                    <h2>LOGIN</h2>
                    <form action="" method="post">
                        <div class="inputBox">
                            <input type="text" placeholder="Email Id" name="user">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Password" name="pass">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="login" name="btn">
                        </div>
                        <div class="forget">
                           
                            <p class="singup">Don't have an account ? <a href="singup.php">Signup</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>
</body>

</html>

<?php
$con= mysqli_connect('localhost','root','','shahbazusers') or die('conn errr');

if(isset($_POST['btn'])){

 echo $user = mysqli_real_escape_string($con,$_POST['email']);
echo $pass = mysqli_real_escape_string($con,$_POST['password']);

}


?>
