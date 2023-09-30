<?php 
declare(strict_types = 1); //? 1 = open , 0 = close 
date_default_timezone_set('Asia/Yangon');
ini_set('display_errors',1);

//? Lambda style 

function mycal($num1,$num2,$funone){
    $total = $num1 + $num2;
    $funone($total);
};

$fun = function($result){
    echo "Total result is {$result} <br/>";
};

mycal(100,400,$fun);

echo "This is lambda style <br/>";

function showresult($addednum){
    echo "Sum result is = {$addednum} <br/>";
}

$add = function($x,$y){
    return $x + $y;
};

showresult($add(5,6));
echo "<hr/>";

echo "This is closure function <br/>";

$num1 = 300;
$num2 = 400;

function colfun1($x,$y){
    // global $num1 , $num2;
    echo "This is regual function . my getting value is = " . $num1 + $num1 . "<br/>";
}

colfun1(100,200);
echo "<hr/>";

//? use() function 
//? closure function() 

$colfun2 = function() use($num1,$num2){
    echo "This is regual function . my getting value is " . $num1 + $num2 . "<br/>";
};

$colfun2();
echo "<hr/>";

function result($fun){
    $fun(); //? invoke 
};

result(function()use($num1,$num2){
    echo "This is regual function . my getting value is " . $num1 + $num2 . "<br/>";
});
echo "<hr/>";




?>