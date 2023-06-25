<?php 
//is_string(variable) Function

$val1 = "Save Myanmar";
echo "val is ".is_string($val1);
echo "<br/>";

$val2 = 0;
echo "val2 is ".is_string($val2);
echo "<br/>";

$val3 = 50;
echo "val3 is ".is_string($val3);
echo "<br/>";

//***
$val4 = "50";
echo "val4 is ".is_string($val4);  //string = 1
echo "<br/>";

$val5 = true;
echo "val5 is ".is_string($val5);
echo "<br/>";

$val6 = "";
echo "val6 is ".is_string($val6);
echo "<br/>";
echo "<hr/>";

//is_numeric(variable)Function
//is_int(variable)function/ is_integer(variable)function 

$val1 = 50;
echo "val1 is " . is_numeric($val1); //1
echo "<br/>";
echo "val1 is " . is_int($val1); //1
echo "<br/>";
echo "val1 is " . is_integer($val1); //1
echo "<br/>";
echo "<br/>";

$val2 = 34.56;
echo "val2 is " . is_numeric($val2); //1
echo "<br/>";
echo "val2 is " . is_int($val2);
echo "<br/>";
echo "val2 is " . is_integer($val2);
echo "<br/>";
echo "<hr/>";

//**** 
$val3 = "50";
echo "val3 is " . is_numeric($val3); //1
echo "<br/>";
echo "val3 is " . is_int($val3);
echo "<br/>";
echo "val3 is " . is_integer($val3);
echo "<br/>";
echo "<hr/>";

// is_float(variable)function
$val1 = 40;
echo "val1 is " . is_float($val1); //
echo "<br/>";

$val2 = 34.56;
echo "val2 is " . is_numeric($val2); //1
echo "<br/>";

$val3 = "34.56";
echo "val3 is " . is_float($val3); //
echo "<br/>";

echo "<hr/>";

// is_bool(variable) function

$val1 = true;
echo "val1 is " . is_bool($val1); //1
echo "<br/>";

$val2 = "true";
echo "val2 is " . is_bool($val2); //1
echo "<br/>";

$val3 = 1;
echo "val3 is " . is_bool($val3); //
echo "<br/>";
echo "<hr/>";

//is_array(variable)function
$val1 = "Help Myanmar";
echo "val3 is " . is_array($val1); //
echo "<br/>";

$val2 = array("aung aung","mya mya");
echo "val3 is " . is_array($val2); //1
echo "<br/>";
echo "<hr/>";


//is_null(variable) Function 

$val1 = 0;
echo "val1 is " . is_null($val1); //
echo "<br/>";

$val2 = null;
echo "val2 is " . is_null($val2); //1
echo "<br/>";

$val3 = NULL;
echo "val3 is " . is_null($val3); //1
echo "<br/>";

$val4 = "null";
echo "val4 is " . is_null($val4); //
echo "<br/>";
echo "<hr/>";

//is_double 
//is_object 

//empty(variable)function VS isset(variable);
//The Following values are empty;
// 0 
// 0.0
// "0"
// ""
// Null 
// FALSE 
// array 
// []
$val1 = "aung aung";
$val1 = FALSE;
$val1 = array();

if(empty($val1)){
    echo "Your variable 1 is empty";
}
echo "<br/>";

if(isset($val1)){
    echo "Your variable 1 is isset";
}

echo "<br/>";

//gettype(variable)
$val = 50;
var_dump($val);
echo "<br/>";
echo gettype($val);
echo "<br/>";
echo "<br/>";


$val2 = 5.6;
var_dump($val2);  //float
echo "<br/>";
echo gettype($val2); //double
echo "<br/>";
echo "<br/>";

$va3 = "Save CRPH";
var_dump($va3);  //
echo "<br/>";
echo gettype($va3); //
echo "<br/>";
echo "<br/>";

$val4 = array();
var_dump($val4);  //
echo "<br/>";
echo gettype($val4); //
echo "<br/>";
echo "<br/>";

$val5 = false;
var_dump($val5);  //bool(false)
echo "<br/>";
echo gettype($val5); //boolen
echo "<br/>";
echo "<br/>";

$val6 = null;
var_dump($val6);  //float
echo "<br/>";
echo gettype($val6); //double
echo "<br/>";
echo "<br/>";


//settype(variable,type) Function 
$val1 = "32";
var_dump($val1);
echo "<br/>";
settype($val1,"integer");
var_dump($val1);
echo "<br/>";
echo "<br/>";

$val2 = 50;
var_dump($val2);
echo "<br/>";
settype($val2,"string");
var_dump($val2);
echo "<br/>";
echo "<br/>";

$val3 = true;
var_dump($val3);
echo "<br/>";
settype($val3,"integer");
var_dump($val3);
echo "<br/>";
echo "<br/>";


?>