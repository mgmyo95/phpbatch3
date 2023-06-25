<?php 
ini_set("display_errors",1);
// =>mysqli procedural

$conn = mysqli_connect("localhost","root","","phpdbone");

if(!$conn){
    echo "Failed to connect a mysqli : " .mysqli_connect_error();
    exit();
};
echo "Connected Successful";
echo "<br/>";

//Update Data 
$sql = "DELETE FROM students WHERE id = 17";

if(mysqli_query($conn,$sql)){    
    echo "Delete Suceessfully";
}else{
    echo "No Result";
}

mysqli_close($conn);
echo "<hr/>";


//mysqli objet-orieted 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbtwo";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn -> connect_errno){
    die("Connection Failed : " . $conn -> connect_errno);
};
echo "Connection Successfully";
echo "<br/>";

$sql = "DELETE FROM students WHERE id = 24";


if($conn -> query($sql) === TRUE){
    echo "Delete Successfully";
}else{
    echo "Error Found";
}

$conn -> close();
echo "<hr/>";

//Using PDO
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);  //connect catch
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   //error mode catch
    $sql = "DELETE FROM students WHERE id = 31";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    echo $stmt -> rowCount() . "Delete Successfully";
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();
};
$conn = null;
echo "<hr/>";



?>