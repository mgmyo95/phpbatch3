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

//Data Insert 
$sql = "INSERT INTO students(firstname,lastname,city)
 VALUE('aung','kyaw','yangon')";

if(mysqli_query($conn,$sql)){
    echo "Insert Successfully";
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

$sql = "INSERT INTO students(firstname,lastname,city)
        VALUES('aung','kyaw','yangon'),
              ('su','hlaing','mandalay')";

if($conn -> query($sql) === TRUE){
    echo "Insert Successful";
}else{
    echo "Error Found : " . $conn -> error;
}

$conn -> close();
echo "<hr/>";

//Using PDO 
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "phpdbthree";
// try{
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     //insert data  ((.=) => concat)

//     $sql = "INSERT INTO students(firstname,lastname,city)
//             VALUES('aung','kyaw','yangon');";
//     $sql .= "INSERT INTO students(firstname,lastname,city)
//             VALUES('su','hlaing','mandalay');";
//     $sql .= "INSERT INTO students(firstname,lastname,city)
//             VALUES('tun','aung','yangon');";
//     $conn -> exec($sql);
//     echo "Insert Successful";
// }catch(PDOException $e){
//     echo "Error Found : " . $e -> getMessage();
// };

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";
try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn -> beginTransaction();  //refresh doing
    
    $conn -> exec("INSERT INTO students(firstname,lastname,city)
    VALUES('aung','kyaw','yangon')");
    $conn -> exec("INSERT INTO students(firstname,lastname,city)
    VALUES('su','hlaing','yangon')");
    $conn -> exec("INSERT INTO students(firstname,lastname,city)
    VALUES('tun','aung','yangon')");

    //every transition committed for each
    $conn -> commit();

    //insert data  ((.=) => concat)
    // $sql = "INSERT INTO students(firstname,lastname,city)
    //         VALUES('aung','kyaw','yangon');";
    // $sql .= "INSERT INTO students(firstname,lastname,city)
    //         VALUES('su','hlaing','mandalay');";
    // $sql .= "INSERT INTO students(firstname,lastname,city)
    //         VALUES('tun','aung','yangon');";
    // $conn -> exec($sql);
    echo "Insert Successful";
}catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();

};

$conn = null;







?>