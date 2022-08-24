<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: rgb(0, 162, 255);">
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent container my-2">
            <!-- <a class="navbar-brand" href="#"><img src="img/logo.svg"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" >
                <!-- <li class="nav-item mr-5">
                  <a class="nav-link btn btn-primary text-white px-5 font-weight-bold" href="login.php" style="font-size: 20px;">Login</a>
                </li> -->
                <li class="nav-item mr-5">
                    <a class="nav-link btn btn-light text-primary px-5 font-weight-bold" href="index.php" style="font-size: 20px;">Home</a>
                  </li>
              </ul>
                
            </div>
          </nav>
            </div>
        </div>
    </div>
</div>

<div class="welcome">
    <div class="container">
        <div class="row justify-align-between align-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center bg-light mx-auto" style=" margin-top:100px; height:450px">
            <img src="img/customer.jpg" class="img-fluid" alt="">
            <a href="customer.php" class="text-decoration-none btn btn-primary mt-5 mb-5 mx-auto font-weight-bold" style="font-size:20px;">customer</a>
            </div>
            <!-- <div class="col-lg-5 col-md-5 col-sm-12 text-center bg-light ml-5" style="margin-top:100px; ">
            <img src="img/manufacturer.png" class="img-fluid" alt="">
            <a href="addproduct.php" class="text-decoration-none btn btn-primary mt-4 font-weight-bold" style="font-size:20px;">manufacturer</a>
            </div> -->
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