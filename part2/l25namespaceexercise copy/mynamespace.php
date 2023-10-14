<?php 

echo __DIR__;
echo "<hr/>";

// use gallery\slideshow\image;
// $image = new image();
// $image -> play();

echo "<hr/>";

use gallery\slideshow as viwer;

spl_autoload_register(function($classname){
    echo "Loading the class = $classname <br/>";

    // $file = str_replace("\","/",$classname) . "php";
    $file = str_replace("\\","/",$classname) . ".php";
    // echo $file;
    // require_once "$file";  //? gallery/photo.php


    if(file_exists($file)){
        require_once(__DIR__. "/" .$file); //? C:\xampp\htdocs\phpbatch3\part2\l25namespaceexercise\gallery\photo.php
    }else{
        echo "No File Exits";
    }

});

$music = new music();
$music -> play();
echo "<hr/>";

$video = new video();
$video -> play();
echo "<hr/>";

$photo = new gallery\photo();
$photo -> play();
echo "<hr/>";

$portrait = new gallery\animateshow\portrait();
$portrait -> play();
echo "<hr/>";

$image = new viwer\image();
$image -> play();
echo "<hr/>";

$picture = new viwer\picture();
$picture -> play();
echo "<hr/>";


?>