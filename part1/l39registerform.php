<?php 
   ini_set("display_errors",1);
    // if(isset($_POST['submit'])){
    //     echo "Form submitted";
    // }

    if(isset($_POST['submit'])){
        $name = textfilter($_POST['name']);
        $email = textfilter( $_POST['email']);
        $password = md5(textfilter($_POST['password']));

        // echo $name;
        // echo $email;
        // echo $password;


        // => MySQLi Procedural

        $conn = mysqli_connect("localhost","root","","phpdbone");

        if(mysqli_connect_error()){
            echo "Failed to connect Mysqli : " . mysqli_connect_error();
            exit();
        };

        // echo "Connected Successfully";
        // echo "<hr/>";

        //? Data Insert 
        $stmt = "INSERT INTO users(name,email,password) VALUE(?,?,?)";
        $insertstmt = mysqli_prepare($conn,$stmt);
        mysqli_stmt_bind_param($insertstmt,"sss",$name,$email,$password);

        mysqli_stmt_execute($insertstmt);
        echo "New User Created Sucessfully";
        mysqli_close($conn);

    };

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);  //? special ascase character
        return $data;
    }



?>

<!-- CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(30),
    password VARCHAR(225)
); -->

<!DOCTYPE html>
<html>
    <head>
        <title> Register Form </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
     
    
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center">Register Form</h3>
            <form action="" method="POST">
                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign Up" />
                
            </form>
        </div>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<!-- zoom ID = 528 716 1189 
password =  -->