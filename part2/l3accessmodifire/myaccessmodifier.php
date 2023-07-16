<?php 

class myaccessmodifier{
 
    //Access Modifire (3)
    // (i)public = anywhere can access 
    // (ii)private = only access inside main class
    // (iii)protected = subclass / extented class

   public $companyname = "Data Land Technology";   //properties 
//    private $companyname = "Data Land Technology";   //error can't print 
    // protected $companyname = "Data Land Technology";  //error can't print

   var $personname = "Mr.Tin";
   public function getnum(){                       //method 
        $num = 10;
        echo $num;

        echo $companyname;   //can't print 
        echo $personname; //can't print
   }
    
}

$obj = new myaccessmodifier();
echo "This is Access Modifier <br/>";

echo $obj -> companyname . "<br/>";

echo $obj -> getnum();    //10 only can print by public (access modifier) 

echo "<br/>";

echo "<hr/>";

echo $obj -> personname . "<br/>";
echo "<br/>";

$obj -> companyname = "ABC Co.,Ltd";
echo $obj -> companyname . "<br/>"; //ABC Co.,Ltd;

$obj -> personname = "Ko Tha";
echo $obj -> personname . "<br/>"; //Ko Tha;

echo "<hr/>";


?>