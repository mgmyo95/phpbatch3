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

//Select Data 
$sql = "SELECT id,firstname,lastname FROM students WHERE id = 1";
$result = mysqli_query($conn,$sql);
//mysqli_num_rows => row a yay twat want to know
if(mysqli_num_rows($result) > 0){    //mysqli_fetch_assoc()  => take out  (method)
    while($row = mysqli_fetch_assoc($result)){
        echo "id : " . $row['id'] . " - Name : " . $row['firstname'] . " " . $row['lastname'] . "<br/>";
    };
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

// $sql = "SELECT id,firstname,lastname FROM students WHERE lastname = 'Hlaing'";
$sql = "SELECT id,firstname,lastname FROM students ORDER BY lastname";
$result = $conn -> query($sql);
// echo "$result -> num_rows";

if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
    echo "id : " . $row['id'] . " - Name : " . $row['firstname'] . " " . $row['lastname'] . "<br/>";
   }
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
                 //method   //prepare()
    $stmt = $conn -> prepare("SELECT id,firstname,lastname FROM students");
    $stmt -> execute();

    //fetch = while(){} , fetchAll = foreach(){}
    // while($row = $stmt -> fetch()){
    //     echo "id : " . $row['id'] . " - Name : " . $row['firstname'] . " " . $row['lastname'] . "<br/>";    
    // };

    foreach($stmt -> fetchAll() as $row){
        echo "id : " . $row['id'] . " - Name : " . $row['firstname'] . " " . $row['lastname'] . "<br/>";
    }
    
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();
};
$conn = null;
echo "<hr/>";




?>