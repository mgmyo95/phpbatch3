<?php 
ini_set('display_errors',1);
// session_start();
require_once "./dbconnect.php";
require_once "./sessionconfig.php";

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
    $getnewsletter = textfilter($_POST['newsletter']);
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
            $stmt = $conn -> prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,newsletter,documents) VALUES(:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:newsletter,:documents)");

            $stmt -> bindParam(":profile",$profile);
            $stmt -> bindParam(":firstname",$firstname);
            $stmt -> bindParam(":lastname",$lastname);
            $stmt -> bindParam(":email",$email);
            $stmt -> bindParam(":password",$password);
            $stmt -> bindParam(":dob",$dob);
            $stmt -> bindParam(":phone",$phone);
            $stmt -> bindParam(":address",$address);
            $stmt -> bindParam(":newsletter",$newsletter);
            $stmt -> bindParam(":documents",$documents);

            $countfiles = count($_FILES['profile']['name']);

            if($countfiles){
                for($x = 0 ; $x < $countfiles ; $x++){
                    $uploaddir = "./assets/";
                    $filename = $_FILES['profile']['name'][$x];

                    // $uploadfile = $uploaddir.basename($filename);  // ./assets/dog1.jpg

                    // $getformat = explode(".",$filename);   //['cutedog1','jpg']
                    // $newfilename = round(microtime(true)).".".end($getformat);  //183888433.jpg
                    // $uploadfile = $uploaddir.basename($newfilename); //./assets/183888433.jpg

                    $getfilecode = uniqid()."_".time();
                    $getextension = pathinfo($filename,PATHINFO_EXTENSION);  //jpg
                    $newfilename = $getfilecode.".".basename($getextension); //assets/649ab006d8bc8_1687859206.jpg
                    $uploadfile = $uploaddir.basename($newfilename);  //649aafa1b0e9f.jpg

                    $uploadtype = explode(".",$filename);
                    $uploadtype = strtolower(end($uploadtype));  //jpg
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
            $newsletter = $getnewsletter;

            $getdocuments = NULL;

            if(isset($_POST['documents'])){
                $docs = $_POST['documents'];

                foreach($docs as $doc){
                    $getdocuments .= $doc.",";
                    echo $getdocuments;
                }
            }

            $documents = $getdocuments;

            // $stmt -> execute();
            echo "New records created successfully";

            if($stmt->execute()){
                // $_SESSION['email'] = $email;
                // $_SESSION['password'] = $password;
                // header("Location:./planncohomedecoration/index.php");
                setsession('email',$email);
                setsession('password',$password);
                redirectto('./planncohomedecoration/index.php');
            }else{
                echo "Try Again";
            }


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


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100),
    dob DATE,
    phone VARCHAR(50),
    address VARCHAR(100)
);

DESC users;
SHOW INDEX FROM users; -->