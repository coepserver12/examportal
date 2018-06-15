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
    <link rel="stylesheet" href="css/AddTest.css">


    <!-- Google web font
   ================================================== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
    <style>
        .border{
                padding: 10px;
                background-color: #FFF;
                border: 1px solid #C5C5C5; 
        }
    </style>  
</head>

<body style="margin-top: 50px">
	
<div class="container">
    <div class="border">
<div class="well">
	


	<form id="Register1" action="addtestdetailsconn.php" method="POST">
	
				<center>
                <fieldset>
               	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
               	    <div class="form-group">
                        <lable class="col-md-4"> Class Name :</lable>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="std" placeholder="class name">
                            </div>
                    </div>
                </div> <br/><br/>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
                    <div class="form-group">
                        <lable class="col-md-4"> Subject :</lable>
                            <div class="col-md-8">
                                 <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                    </div>
               </div> <br/><br/>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
                <div class="form-group">
                        <lable class="col-md-4"> Test Duration :</lable>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="testduration" placeholder="eg. 20 min.">
                            </div>
                    </div>
              </div> <br/><br/>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
                <div class="form-group">
                        <lable class="col-md-4"> Test Duration :</lable>
                            <div class="col-md-8">
                               <input type="text" class="form-control" name="testtime" placeholder="eg. 4 pm">
                            </div>
                    </div>
                </div> <br/><br/>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">                
                <div class="form-group">                   
                        <lable class="col-md-4"> Date :</lable>
                            <div class="col-md-8">
                                <input id="date" type="date" class="form-control" name="testdate"placeholder="eg. 01/01/2010">
                            </div>
                    </div>
                </div> <br/><br/>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
                <div class="form-group">
                        <lable class="col-md-4"> No. of Questions :</lable>
                            <div class="col-md-8">
                                <input id="noq" type="text" class="form-control" name="noq"placeholder="eg. 20">
                            </div>
                    </div>
                </div> <br/><br/>
               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">              
                    <button type="submit" name="addtestdetails" class="btn btn-primary col-md-8 col-md-offset-4">Save Test Details</button>
                 </div>
                    </fieldset>
                </center>

        </form> 
    </div>
  </div>
</div>


<!-- Javascript 
================================================== -->
 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>

</html>