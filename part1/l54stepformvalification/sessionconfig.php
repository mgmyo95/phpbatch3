<?php 
session_start();

//assign function
function setsession($key,$val){ 
    $_SESSION[$key] = $val;
}

//return function
function getsession($key){
    return $_SESSION[$key];
}


function verifysession($key){
    return isset($_SESSION[$key]);
}

function unsetsession($key){
    unset($_SESSION[$key]);
}

function destroyallsession(){
    session_destroy();
}

function authfailed(){
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        return true;
    }
}

function redirectto($url){
    header("Location:$url");
}


?>