<?php 
ini_set("display_errors",1);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Data 1</title>
    </head>
    <body>
        <h3>Hello Friend! Welcome to <?php echo $_GET['city'] ?></h3>
        <p>I am <?php echo $_GET['name'] ?>.I got your data by passing GET Method</p>

        <h3>Hello Friend! Welcome to <?php echo $_POST['city'] ?></h3>
        <p>I am <?php echo $_POST['name'] ?>.I got your data by passing GET Method</p>

    </body>
</html>