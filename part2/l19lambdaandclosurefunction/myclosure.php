<?php 

//? => Lambda Style

function mycal($num1,$num2,$funone){
    $total = $num1 + $num2;
    $funone($total);
};

$fun = function($result){
    echo "Total result is = ${result} <br/>";
};

mycal(100,200,$fun);  //? total result is = 300

echo "This is Lambda Style <br/>";

function showresult($addednum){
    echo "Sum result is = ${addednum} <br/>";
}

//? annonymous function or nameless function
$add = function($x,$y){
    return $x+$y;
};

showresult($add(100,500)); //? sum result is =  600

echo "<hr/>";

echo "This is closure function <br/>";

$num1 = 300;  //? Global Variable 
$num2 = 400;  

function colfun1($x,$y){
    //? global = $num1 , $num2;
    echo "This is regual function . my getting value is " . $x + $y . "<br/>";
}

colfun1($num1,$num2);  //? This is regual function . my getting value is = 700

//? use() function 
//? closure function
$colfun2 = function() use($num1,$num2){
    echo "This is regual function . my getting value is " . $num1 + $num2 . "<br/>";
};

$colfun2();  //? This is regual function . my getting value is = 700

echo "<hr/>";

function result($fun){
    $fun();
}; //? invoke

result(function()use($num1,$num2){
    echo "This is regual function . my getting value is " . $num1 + $num2 . "<br/>";
});

echo "<hr/>";




?>