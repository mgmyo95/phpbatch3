<?php 
session_start();

if(isset($_SESSION['count'])){
    $_SESSION['count']++;
}else{
    $_SESSION['count'] = 1;
};

echo "idx count = " . $_SESSION['count'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Session</title>
    </head>
    <body>
    
        <ul>
            <li><a href="exercise.php">Set Session</a></li>
            <li><a href="destroysession.php" target="_blank">Delete Session</a></li>
        </ul>


    </body>
</html>