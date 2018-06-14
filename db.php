<?php 
//print_r(PDO::getAvailableDrivers());

$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

try{
    $DBH  = new PDO("mysql:host = $servername ; dbname = $dbname", $username,$password);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
     echo "ERROR : ". $e->getMessage();
}

?>