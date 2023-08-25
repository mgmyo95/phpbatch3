<?php 
session_start();

//=>single destroy session 
// unset($_SESSION['idxcount']);
// echo "Single session destroy successfully";

//=>multi destroy session 
session_destroy();
echo "All session destroy successfully";


?>