<?php 
ini_set("display_errors",1);
require_once "./dbconnect.php";

//sudo chmod 777 -R assets/

if($_SERVER("REQUEST_METHOD") === "POST"){
    // echo "Hello";
    
    $getfirstname = textfilter($_POST['frstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
    // $getprofile = textfilter($_POST['profile']);

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;

    if($getemail && $getpassword){
        try{
            $stmt = $conn -> prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address) VALUE(:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address)");
            $stmt -> bindParam(":profile",$profile);
            $stmt -> bindParam(":firstname",$firstname);
            $stmt -> bindParam(":lastname",$lastname);
            $stmt -> bindParam(":email",$email);
            $stmt -> bindParam(":password",$password);
            $stmt -> bindParam(":dob",$dob);
            $stmt -> bindParam(":phone",$phone);
            $stmt -> bindParam(":address",$address);

            $countfiles = count($_FILES['profile']['name']);

            if($countfiles){
                for($x = 0 ; $x < $countfiles ; $x++){
                    $uploaddir = "./assets/";
                    $filename = $_FILES['profile']['name'][$x];
                    $uploadfile = $uploaddir.basename($filename);  //assets/dob1.jpg 
                    $uploadtype = explode(".",$filename);
                    $uploadtype = strtolower(end($uploadtype)); //jpg
                    $allowextensitions = ["jpg","jpeg","png","gif"];
                    $filesize = $_FILES['profile']['size'][$x];
                    $filetmp = $_FILES['profile']['tmp_name'][$x];

                    $errors = [];

                    //check extension 
                    if(in_array($uploadtpe,$allowextensitions) === false){
                        $errors[] = "Sorry , we just allowed JPG,JPEG,PNG & GIF files type";
                    }

                    //check size 
                    if($filesize > 300000){
                        $errors[] = "Sorry , Your file size is too large";
                    }

                    //upload
                    if(empty($errors) === true){
                        move_uploaded_file($filetmp,$uplodfile);
                        echo "File Successfully Uploaded.";
                    }else{
                        echo "<pre>".print_r($errors,true)."</pre>";
                    }

                }
            }

            $firstname = $getfirstname;
            $lastname = $getlastname;
            $email = $getemail;
            $password = $getpassword;
            $dob = $getdob;
            $phone = $getphone;
            $address = $getaddress;
            $profile = $getprofile;

            $stmt -> execute();
            echo "New Record Created Successfully";


        }catch(PDOException $e){
            echo "Error Found : " . $e -> getMessage();
        }

        $conn = null;
    }



}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

?>


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100)
); 
DESC users;
SHOW INDEX FROM users;
-->