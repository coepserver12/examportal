<html>
<body>
<?php
include("db.php");

if (isset($_POST['addtestdetails'])) {

// fetched values from add details form

	$std=$_POST['std'];
    $subject=$_POST['subject'];
    $testduration=$_POST['testduration'];
    $testtime=$_POST['testtime'];
    $testdate=$_POST['testdate'];
    $noq=$_POST['noq'];

// insert query
    $statement = $conn->prepare("INSERT INTO test_details (class_name, test_subject, test_duration, test_time, test_date,noq)
    VALUES(:class_name, :test_subject, :test_duration, :test_time, :test_date, :noq)");

    $statement->execute(array(
            "class_name" => $std,
            "test_subject" => $subject,
            "test_duration" => $testduration,
            "test_time" => $testtime,
            "test_date" => $testdate,
            "noq" => $noq,
    ));

    if($statement)
    {
    ?>
    
    <script> 
            alert('Registration Succesfull !!!!!')
    </script>
    <?php
        header('Location: addtestdetails.php');
    }
}
else{
    echo mysql_error;
}
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>