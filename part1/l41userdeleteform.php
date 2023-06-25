<?php 
   ini_set("display_errors",1);
  
   //=> PDO
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "phpdbone";


   try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $conn -> prepare("SELECT id,name,email FROM users");
    $stmt -> execute();

    // while($row = $stmt -> fetch()){
    //     echo "id : " . $row['id'] . " Name : " . $row['name'] . " Email " . $row["email"] . "<br/>";  
    // }

   }catch(PDOException $e){
    echo "Error Found : " . $e -> getMessage();
   }



    if(isset($_POST['submit'])){

        $stmt = $conn -> prepare("DELETE FROM users WHERE id =:id");
        $stmt -> bindParam(":id",$id);
        $id = $_POST['submit'];
        $stmt -> execute();
        echo $stmt -> rowCount() . "User Delete Successfully";
        $conn = null;
        
        //Redirect 
        // $page = $_SERVER['PHP_SELF'];
        // header("Location:$page");
        // exit;

        //Redirect by javascript 
        echo "<script type=\"text/javascript\">

        //Method1 = Redirect to current page 
        // window.location.href = window.location.href;

        //Method2 = Redirect to current page 
        // window.location.replace(window.location.href);

        //Method1 = Redirect to current page 
        window.location.assign(window.location.href);


        </script>";


    };



?>

<!DOCTYPE html>
<html>
    <head>
        <title> User Update Form </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
     
    
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center">User Delete Form</h3>
            <table class="table border table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    while($row = $stmt -> fetch()){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];

                        echo "<tr>";
                        echo "<td> $id </td>";
                        echo "<td> $name </td>";
                        echo "<td> $email </td>";
                        echo "<td><form action='' method='POST'><button type='submit' name='submit' id='submit' class='btn btn-danger' value='$id'>Delete</button></form></td>";
                        echo "</tr>";

                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<!-- zoom ID = 528 716 1189 
password =  -->

<!-- 19RD -->