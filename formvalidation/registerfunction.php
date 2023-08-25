<?php 

require_once "./dbconnection.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password'])); 
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);

    echo "<br/>";

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;

    if($getemail && $getpassword){
        try{

            $stmt = $conn -> prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address) VALUES(:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address)");

            $stmt -> bindParam(":profile",$profile);
            $stmt -> bindParam(":firstname",$firstname);
            $stmt -> bindParam(":lastname",$lastname);
            $stmt -> bindParam(":email",$email);
            $stmt -> bindParam(":password",$password);
            $stmt -> bindParam(":dob",$dob);
            $stmt -> bindParam(":phone",$phone);
            $stmt -> bindParam(":address",$address);

            $firstname = $getfirstname;
            $lastname = $getlastname;
            $email = $getemail;
            $password = $getpassword;
            $dob = $getdob;
            $phone = $getphone;
            $address = $getaddress;

            $countfile = count($_FILES['profile']['name']);
            echo $countfile;

            if($countfile){

                for($x = 0 ; $x < $countfile ; $x++){
                    $uploaddir = "./assets/";
                    $filename = $_FILES['profile']['name'][$x];
                    // $uploadfile = $uploaddir.basename($filename);

                    $getformat = explode(".",$filename);
                    $newfilename = round(microtime(true)).".".end($getformat);
                    $uploadfile = $uploaddir.basename($newfilename);



                    $uploadtype = explode(".",$filename);
                    $uploadtype = strtolower(end($uploadtype));
                    $allowextensitions = ['jpg','jpeg','png','git'];
                    $filesize = $_FILES['profile']['size'][$x];
                    $filetmp = $_FILES['profile']['tmp_name'][$x];
                    $errors = [];

                    //check extension 
                    if(in_array($uploadtype,$allowextensitions) === false){
                        $errors = "Sorry, We just allowed JPG,JPEG,PNG AND GIT file type.";
                    }

                    //check size 
                    if($filesize > 3000000){
                        $errors = "Sorry , Your file size is too large";
                    }


                    //upload
                    if(empty($errors) == true){
                        move_uploaded_file($filetmp,$uploadfile);
                        $profile = $uploadfile;
                        echo "File upload successfully";
                    }else{
                        echo "<pre>".print_r($errors,true)."</pre>";
                    }

                }

            }

            $stmt -> execute();
            echo "New record created successfully";

        }catch(PDOException $e){
            echo "Error Found : " . $e -> getMessage();
        }
    }

}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}



?>