<html>
<body>
<?php
include("db.php");



if(isset($_POST['register']))
    
{
    
    
    $fname=$_POST['fname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $pass=md5($password);
    
    $statement = $conn->prepare("INSERT INTO register(fname, mobile, email, gender, password)
    VALUES(:fname, :mobile, :email, :gender, :password)");
    $statement->execute(array(
            "fname" => $fname,
            "mobile" => $mobile,
            "email" => $email,
            "gender" => $gender,
            "password" => $pass,
    ));
    
    if($statement)
    {
       ?>
    
    <script> 
            alert('Registration Succesfull !!!!!')
    </script>
    <?php
        header('Location: index.php');
    }
    
    
}

else
    
{
    
    echo mysql_error;
}



?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>