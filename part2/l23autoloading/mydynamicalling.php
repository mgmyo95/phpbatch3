<?php 


    // require_once "./music.php";
    // require_once "./video.php";

    //? spl = special
    //? spl_autoload_register(callback function);  look at classname
    //? new = call classname();

    spl_autoload_register(function($classname){

        echo "Loading the class = {$classname} <br/>";
        require_once "$classname.php";

    });

    $music = new music();
    $music -> play();

    $video = new video();
    $video -> play();

    //! can't call 
    $photo = new photo();
    $photo -> play();


?>