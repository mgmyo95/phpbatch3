<?php 

//? spl = special
//? spl_autoload_register(callback function());

// spl_autoload_register(function($classname){

//     require_once "$classname.php";

// });

spl_autoload_register(function($classname){
    require_once "$classname.php";
});

require_once "exercise.php";




?>