<?php 

session_start();

// =>Single Destroy Session
// unset($_SESSION['idxcount']);
// echo "single Session Destroy Successfully";  

// =>All Destroy Session
session_destroy();
echo "All Session Destroy Successfully";



?>