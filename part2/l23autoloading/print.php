<?php 


    require_once "./music.php";
    require_once "./video.php";
    require_once "./gallery/photo.php";

    $music = new music();
    $music -> play();

    $video = new video();
    $video -> play();

    $photo = new photo();
    $photo -> play();


?>