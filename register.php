<?php 

include 'config.php';

error_reporting(0);

if(isset($_POST["signup"])){
    $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));


    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM info WHERE email='$email'"));


if($password !== $cpassword){

    echo "<script>alert('password did not match');</script>";

} elseif($check_email > 0){
    echo "<script>alert('email already exist');</script>";

}else {
    $sql = "INSERT INTO info (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $_POST["signup_full_name"] = "";
        $_POST["signup_email"] = "";
        $_POST["signup_password"] = "";
        $_POST["signup_cpassword"] = "";
        echo "<script>alert('user registration succesfully');</script>";

    }else{
        echo "<script>alert('user registration failed');</script>";

    }
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-5 mt-5 bg-light" style="border: 2px solid black; height: 600px;">
                    <img src="img/Digital-Marketing-Strategy.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-5 mt-5 bg-light" style="border: 2px solid black; height: 600px;">
                    <div class="formbox text-center">
                        <form action="#" class="sign-up-form mx-auto text-center" method="post">
                            <h2 class="title text-center mb-5">Register</h2>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" placeholder="username" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required>
    
                            </div>
                            <div class="form-group">
                                
                                <input type="email" class="form-control" placeholder="Email" name="signup_email"m value="<?php echo $_POST["signup_email"]; ?>" required >
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" class="btn btn-primary" name="signup">
                            </div>
                            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
                        </form>
                    </div>
                    
                </div>

                
            </div>

        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

</body>

</html>