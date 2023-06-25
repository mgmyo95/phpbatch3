<?php 
ini_set("display_errors",1);

// =>mysqli procedural

$conn = mysqli_connect("localhost","root","","phpdbone");

if(mysqli_connect_error()){
    echo "Failed to connect a mysqli : " .mysqli_connect_error();
    exit();
};
echo "Connected Successful";
echo "<br/>";

//Create Table 
$sql = "CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30)NOT NULL,
    lastname VARCHAR(30)NOT NULL,
    city VARCHAR(50),
    crated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
    echo "Table Created Successfully";
}else{
    echo "Error Found : " . mysqli_error($conn);
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

$sql = "CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30)NOT NULL,
    lastname VARCHAR(30)NOT NULL,
    city VARCHAR(50),
    crated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn -> query($sql) === TRUE){
    echo "Table Created Successful";
}else{
    echo "Error Found : " . $conn -> error;
}

$conn -> close();
echo "<hr/>";

//Using PDO 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30)NOT NULL,
        lastname VARCHAR(30)NOT NULL,
        city VARCHAR(50),
        crated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn -> exec($sql);
    echo "Table Created Successful";
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();
};



?>