<?php 

session_start();
// session_destroy();
unset($_SESSION['email']);
unset($_SESSION['password']);

if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
    header("Location:./signup.php");
};

?>