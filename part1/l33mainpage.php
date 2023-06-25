<?php 

//=> inclide or require 

// include "path/filename.fileformat";
// include ("path/filename.fileformat");
// require "path/filename.fileformat";
// require ("path/filename.fileformat");

// include_once "path/filename.fileformat";
// include_once ("path/filename.fileformat");
// require_once "path/filename.fileformat";
// require_once ("path/filename.fileformat");

//include_once ka one time pl call lot ya
//require_once ka one time pl call lot ya

// echo "This is Artical 1 <br/>";
// include "./l34headerpage.php";
// echo "<br/>";
// require "./l35contentpage.php";
// echo "<br/>";
// include ("./l36footerpage.php");
// echo "<br/>";


// echo "This is Artical 2 <br/>";
// include "./l34headerpage.php";
// echo "<br/>";
// require "./l35contentpage.php";
// echo "<br/>";
// require ("./l36footerpage.php");
// echo "<br/>";


echo "This is Artical 1 <br/>";
include_once "./l34headerpage.php";
echo "<br/>";
require_once "./l35contentpage.php";
echo "<br/>";
include_once ("./l36footerpage.php");
echo "<br/>";






?>