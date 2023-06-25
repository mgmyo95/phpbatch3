<?php 

//Variables 
//variable scope 
// (i)Global Variable Scope 
// (ii)Local Variable Scope 
// (iii)Static Variable Scope 

$num1 = 100; //Global Variable 

function funone(){
    echo "Global variable in function = $num1 <br/>";
}; 
funone();  //global variable in function = (no print out cuz function will generate an error);

echo "Global variable print outside = $num1";  //Global variable print outsize = 100;

echo "<br/>";

function funtwo(){
    $num2 = 200; //Local Variable 
    echo "Local variable in function = $num2 <br/>";
};
funtwo();  //Local Variable in function = 200
echo "local variable in function = $num2 ";  //Local Variable print outside = (no print out)
echo "<br/>";

//global keyword 

$num3 = 300;
$num4 = 400;

function funthree(){
    // global $num3,$num4;
    global $num3;
    global $num4;
    global $result;
    $result = $num3 + $num4;
    echo "This is result , print by funthree = $result <br/>";
};
funthree();
echo "This is result , print outside = $result <br/>";
echo "<br/>";

$num5 = 500;
$num6 = 600;

function funfive(){
    global $sum;
    $GLOBALS['sum'] = $GLOBALS['num5'] + $GLOBALS['num6'];
    echo "This is sum , print by funfive = $sum <br/>";  //$GLOBALS['sum'] is not variable 
};
funfive();
echo "This is sum , print outside = $sum <br/>";
echo "<br/>";

//static keyword 
$num7 = 700;
function funseven(){  
    global $num7; 
    $num7++;
    echo $num7."<br/>";
};
funseven();
funseven();
funseven();
echo "<br/>";

function funeight(){
    static $num8 = 800;
    $num8++;
    echo $num8."<br/>";
}
funeight();
funeight();
funeight();
echo "<hr/>";

//passing by reference 

$num9 = 900;
function funnine($num9){
    $num9 = 9000;
    echo $num9."<br/>";
}
echo $num9."<br/>";//900
funnine($num9);//9000
echo $num9."<br/>";//900

$num10 = 1000;
               //reference
function funten(&$num10){
    $num10 = 10000;
    echo "$num10 <br/>";
};

echo "$num10 <br/>"; //1000
funten($num10); //10000
echo "$num10 <br/>";//10000
echo "$num10 <br/>";//10000

$name = "Aung Aung";

function funname(&$val){
    $val = "Kyaw Kyaw";
    echo "$val <br/>";
};
// echo "$name <br/>";  //Aung Aung
// funname($name); //Kyaw Kyaw
// echo "$name <br/>";  //Kyaw Kyaw
// echo "$name <br/>";  //Kyaw Kyaw

$fullname = "Aung Tun Tun";

echo "$name <br/>"; //Aung Aung
echo "$fullname <br/>";//Aung Tun Tun
funname($fullname); //Kyaw Kyaw
echo "$name <br/>";//Aung Aung
echo "$fullname <br/>"; //Kyaw Kyaw


?>