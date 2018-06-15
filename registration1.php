<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Online Test</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap CSS
   ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Animate CSS
   ================================================== -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Font Icons
   ================================================== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registration.css">


    <!-- Google web font
   ================================================== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header">
    </div>
   <div class="col-md-10 col-lg-10  col-md-offset-1 col-lg-offset-1 maindiv ">
    <fieldset>
        <div class="border">
        <form id="Register1" method="post" action="registrationconn.php">
            <h1> Registration </h1>
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="fname" placeholder="Full Name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  col-md-offset-2 col-lg-offset-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input type="text" class="form-control" name="mobile" placeholder="Contact No">
                </div>
            </div>


            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  col-md-offset-2 col-lg-offset-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>


            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  col-md-offset-2 col-lg-offset-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <select class="form-control" name="gender">
                    <option disabled>--Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  col-md-offset-2 col-lg-offset-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  col-md-offset-2 col-lg-offset-2 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                </div>
            </div>
            <button type="submit" name="register" class="btn btn-primary col-md-3 col-md-offset-2 col-lg-offset-2 ">Submit</button>
            <a href="login.php"><button type="button" class="btn btn-secondary  col-md-3 col-md-offset-2 "s>Cancle</button></a>
        </form>
        </div>
    </fieldset>
    </div>

    <!-- Javascript 
================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
