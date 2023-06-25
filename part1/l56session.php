<?php 

session_start(); //function

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] = 1;
};

echo $_SESSION['idxcount'];

?>