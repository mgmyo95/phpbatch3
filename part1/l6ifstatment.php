<?php 
//if statment 

$x = 10;
$y = 20;

if($x > $y){
    echo "Your condition is Yes";
}

if($x < $y){
    echo "Your condition is Yes";
}

echo "<br/>";

//if else 

if($x > $y){    
    echo "Yes x greager than y";
}else{
    echo "No x less than y";
}

echo "<br/>";

if($x < $y){
    echo "Yes x less than y";
}else{
    echo "No x greater than y";
}


echo "<br/>";

//short hand
if($x < $y)echo "Yes x less than y"; else echo "No , x greater than y";
if($x < $y)
echo "Yes x less than y";
else
echo "No x greater than y";

echo "<br/>";

$color = 'gray';
$colorvalue = $color; //Assign by refrense

// print $colorvalue;
echo "<br/>";

// if($colorvalue === 'red'){
//     echo "My fav color is red";
// }else{
//     echo "I hater red color";
// }

// if($colorvalue === 'red'){
//     echo "My fav color is $color";
// }else{
//     echo "I hater $color color";
// }

if($colorvalue === 'red'){
    echo "My fav color is ".$color;
}else{
    echo "I hater ".$color." color ";
}

echo "<br/>";

//logical Operator 
// &&(And) ||(OR) !(NOT)

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
    echo "It is true";
}else{
    echo "It is false";
}
echo "<br/>";

if($a < $b && $b < $c){
    echo "It is true";
}else{
    echo "It is false";
}
echo "<br/>";

if($a < $b || $b > $c && $a < $c){
    echo "It is true";
}else{
    echo "It is false";
}
echo "<br/>";

//result = true;
if($a < $b || $b > $c && $a > $c){
    echo "It is true";
}else{
    echo "It is false";
}

echo "<hr/>";
                    //result = false
        //true              false  
if(($a < $b || $b > $c) && $a > $c){
    echo "It is true";
}else{
    echo "It is false";
}
echo "<hr/>";

if(!($a < $b)){
    print "It is true";
}else{
    echo "It is false";
}
echo "<br/>";

//if elseif else

if($b < $c){
    echo "It is true";
}elseif($b === 200){
    echo "It is equal";
}else{
    echo "It is false";
}
echo "<br/>";

if($b > $c)echo "It is true"; elseif($b === 200) echo "It is equal";else echo "It is false";

echo "<br/>";

if($b < $c)
    echo "It is true";
elseif($b === 200)
    echo "It is equal";
else
    echo "It is false";

echo "<br/>";

// swtich(condition){
//     case label1:
//         code to be executed;
//     break;
//     case label2:
//         code to be executed;
//     break;
//     ......... 
//     default:
//     code to be executed
// }

echo "<hr/>";

$phone = 'iphone';
// echo $phone;

switch ($phone){
    case "sony":
       echo "i can't by sony phone";
    break;
    case "iphone":
        echo "i hate apple product";
    break;
    case "mi":
        echo "ok , i can buy";
    break;
    case "samsung":
        echo "my fav mobile product";
    break;
    default:
    echo "I love keypad";

}


?>

