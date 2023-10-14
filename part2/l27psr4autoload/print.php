<?php 

// require_once('app/music.php');
require_once("vendor/autoload.php");

use app\music;
use app\video;
use app\gallery\photo;
use app\gallery\animateshow\portrait;
use app\gallery\slideshow as slider;
use app\gallery\slideshow\picture;
use app\models\article;
use config\auth;

$music = new music();
$music -> play();

$video = new video();
$video -> play();

$photo = new photo();
$photo -> play();

$portrait = new portrait();
$portrait -> play();

$image = new slider\image();
$image -> play();

$picture = new picture();
$picture -> play();

$article = new Article();
$article -> index();

$auth = new auth();
$auth -> login();




// xampp\htdocs\phpbatch3\part2\l27psr4autoload> 
//? composer dump-autoload (terminal run)
//? composer dump-autoload -o  (terminal run)  o = optimize



?>