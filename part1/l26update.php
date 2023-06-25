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

//Update Data 
$sql = "UPDATE students SET lastname = 'tun tun' WHERE id = 17";

if(mysqli_query($conn,$sql)){    
    echo "Updated Suceessfully";
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

$sql = "UPDATE students SET lastname = 'mar aye' WHERE id = 24";


if($conn -> query($sql) === TRUE){
    echo "Updated Successfully";
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
    $sql = "UPDATE students SET city = 'mawlamyine' WHERE id = 31";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    echo $stmt -> rowCount() . "Updated Successfully";
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();
};
$conn = null;
echo "<hr/>";


?>