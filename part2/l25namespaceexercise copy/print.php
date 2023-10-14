<?php 


    require_once "./music.php";
    require_once "./video.php";
    require_once "./gallery/photo.php";  //? method 1

    require_once "./gallery/animateshow/portrait.php";

    
    use gallery\photo;  //? method 2
    use gallery\animateshow\portrait;

    $music = new music();
    $music -> play();

    $video = new video();
    $video -> play();

    //? method 1
    // $photo = new gallery\photo();
    // $photo -> play();

    //? method 2
    $photo = new photo();
    $photo -> play();

    //? Method 1
    // $portrait = new gallery\animateshow\portrait();
    // $portrait -> play();

    //? Method 2
    $portrait = new portrait();
    $portrait -> play();


?>