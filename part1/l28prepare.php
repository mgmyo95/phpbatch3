<?php 
ini_set("display_errors",1);

// The argument of four type 
// i - integer 
// d : double 
// s : string 
// b : bool

// =>mysqli procedural

// $conn = mysqli_connect("localhost","root","","phpdbone");

// if(mysqli_connect_error()){
//     echo "Failed to connect a mysqli : " .mysqli_connect_error();
//     exit();
// };
// echo "Connected Successful";
// echo "<br/>";

// //Data Insert 
// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)";
// $insertstmt = mysqli_prepare($conn,$stmt);
                          //variable   datatype
// mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);
// $firstname = "maung";
// $lastname = "zaw";
// $city = "bagan"; 
// mysqli_stmt_execute($insertstmt);
// echo "New Records Created Successfully";
// mysqli_close($conn);
// echo "<hr/>";

$conn = mysqli_connect("localhost","root","","phpdbone");

if(mysqli_connect_error()){
    echo "Failed to connect a mysqli : " .mysqli_connect_error();
    exit();
};
echo "Connected Successful";
echo "<br/>";

//Data Insert 
$stmt = "INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)";
$insertstmt = mysqli_prepare($conn,$stmt);                      
mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

$firstname = "kyaw";
$lastname = "kyaw";
$city = "Yangon";
mysqli_stmt_execute($insertstmt);

$firstname = "zaw";
$lastname = "zaw";
$city = "Yangon"; 
mysqli_stmt_execute($insertstmt);

$firstname = "hnin";
$lastname = "mya";
$city = "Yangon"; 
mysqli_stmt_execute($insertstmt);

echo "New Records Created Successfully";
mysqli_close($conn);
echo "<hr/>";

//mysqli object-oriented

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

$stmt = $conn -> prepare("INSERT INTO students(firstname,lastname,city) VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$city);

$firstname = "Kyaw Kyaw";
$lastname = "Aung";
$city = "Bago";
$stmt -> execute();

$firstname = "Hnin";
$lastname = "Mya";
$city = "Bago";
$stmt -> execute();

$firstname = "aye";
$lastname = "aye";
$city = "Mawlamyine";
$stmt -> execute();

echo "New records created successfully phpdbtwo";
$stmt -> close();
$conn -> close();
echo "<hr/>";


//using PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $conn -> prepare("INSERT INTO students(firstname,lastname,city) VALUES(:firstname,:lastname,:city)");
    $stmt -> bindParam(":firstname",$firstname);   //keyword bindParam put on / :firstname = keyword
    $stmt -> bindParam(":lastname",$lastname);
    $stmt -> bindParam(":city",$city);

    $firstname = "Kyaw Kyaw";
    $lastname = "Aung";
    $city = "Bago";
    $stmt -> execute();

    $firstname = "Hnin";
    $lastname = "Mya";
    $city = "Bago";
    $stmt -> execute();

    $firstname = "aye";
    $lastname = "aye";
    $city = "Mawlamyine";
    $stmt -> execute();
    echo "New record created Successful";
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();

};

$conn = null;






?>