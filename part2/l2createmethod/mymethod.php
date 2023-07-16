<?php 
// echo "hay";

//Define Class Object 

// class classname{
//     properties 
//     method 
// }

// new classname();  //invoke class


class mymethod{
 
    //Access Modifire (3)
    // (i)public = anywhere can access 
    // (ii)private = only access inside main class
    // (iii)protected = subclass / extented class

    //class method 
    public function greeting(){
        echo "Have a good day";
    }

    public function calculate($num){
        echo "Getiting calculate number is = ${num} <br/>";
    }

    public function result($num = 1){
        echo "Getting result number is = ${num} <br/>";
    }
    
}

$obj = new mymethod();
echo "This is Class Method <br/>";

$obj->greeting();
echo "<br/>";
$obj -> calculate(150);
echo "<br/>";
$obj -> result();    //echo "Getting result number is = 1
echo "<hr/>";


?>