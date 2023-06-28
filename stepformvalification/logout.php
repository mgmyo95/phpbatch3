<?php 

session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);

if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
    header("Location:./signup.php");
}

?>