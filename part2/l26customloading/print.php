<?php 

require_once "mycustomload.php";

use gallery\slideshow as viwer;
use gallery\slideshow\picture;

mycustomload::loader('music');
$music = new music();
$music -> play();
echo "<hr/>";

mycustomload::loader('video');
$video = new video();
$video -> play();
echo "<hr/>";

mycustomload::loader('gallery\photo');
$photo = new gallery\photo();
$photo -> play();
echo "<hr/>";

mycustomload::loader('gallery\animateshow\portrait');
$portrait = new gallery\animateshow\portrait();
$portrait -> play();
echo "<hr/>";

mycustomload::loader('gallery\slideshow\picture');
$picture = new picture();
$picture -> play();
echo "<hr/>";

?>