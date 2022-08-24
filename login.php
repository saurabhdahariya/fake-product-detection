<?php 

include 'config.php';



error_reporting(0);



if(isset($_POST["signin"])){
    
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    


    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT full_name FROM info WHERE email='$email' AND password='$password'"));

    if(mysqli_num_rows($check_email) > 0){
        $row = mysqli_fetch_assoc($check_email);
       
        header("Location: addproduct.php");


    } else{
        echo "<script>alert('login details is incorrect, please try again.');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
                        <form action="addproduct.php" method = "post" class="sign-up-form mx-auto pt-5">
                            <h2 class="title text-center mb-5">Sign In</h2>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name = "email" value="<?php echo $_POST['email']; ?>" required >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name = "password" value="<?php echo $_POST['password']; ?>" required>
                            </div>
                            <input type="submit" class="btn btn-primary" name = "signin" value="login" />
                        </form>
                        <a href="register.php" class="text-decoration-none mt-5">create new account</a>
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