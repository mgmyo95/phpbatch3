<?php 

//using PDO (PHP data object)
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbone";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection Successfully";
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();
}

?>