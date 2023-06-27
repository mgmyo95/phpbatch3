<?php 
ini_set('display_errors',1);
require_once "./dbconnect.php";

//sudo chmod 777 -R assets/

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // echo "Hello";

    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
    echo "<br/>";

    // echo $getfirstname;
    // echo $getlastname . "<br/>";
    // echo $getemail . "<br/>";
    // echo $getpassword . "<br/>";
    // echo $getdob . "<br/>";
    // echo $getphone . "<br/>";
    // echo $getaddress . "<br/>";

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
                    $uploadfile = $uploaddir.basename($filename);  // ./assets/dog1.jpg 
                    $profile = $uploadfile;  // ./assets/dog1.jpg
                    $uploadtype = end(explode(".",$filename));
                    $uploadtype = strtolower($uploadtype);  //jpg
                    $allowextensitions = ["jpg","jpeg","png","gif"];
                    $filesize = $_FILES['profile']['size'][$x];
                    $filetmp = $_FILES['profile']['tmp_name'][$x];
                    $errors = [];

                    //check extension 
                    if(in_array($uploadtype,$allowextensitions) === false){
                        $errors[] = "Sorry , We just allowed JPG,JPEG,PND & GIT files types.";
                    }

                    //check size 
                    if($filesize > 3000000){
                        $errors[] = "Sorry , Your file is too large.";
                    }


                    //upload
                    if(empty($errors) === true){
                        move_uploaded_file($filetmp,$uploadfile);
                        $profile = $uploadfile;
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

            $stmt -> execute();
            echo "New records created successfully";

        }catch(PDOException $e){
            echo "Error Found : " . $e -> getMessage();
        }

        $conn = null;

    }

    
};

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}



?>