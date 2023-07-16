<?php 

class thiskeyword{
 
    //Access Modifire (3)
    // (i)public = anywhere can access 
    // (ii)private = only access inside main class
    // (iii)protected = subclass / extented class

    public $companyname = "Data Land Technology";
    // private $companyname = "Data Land Technology";  
    // protected $companyname = "Data Land Technology";

    public function getcomname(){
        echo $this -> companyname;
        echo "<br/>";

        echo $this -> companyname = "ABC Co.,Ltd";
    }
    
}

 class vehicle{
    public $brand = "";
    public function getbrandname(){
        return $this -> brand;
    }

    public function setbrandname($name){
        $this -> brand = $name;
    }
 }

$obj = new thiskeyword();
echo "This is This Keyword <br/>";

$obj -> getcomname();
// $obj -> companyname;   //public can do this


echo "<hr/>";

$car1 = new vehicle();
echo $car1 -> getbrandname();
$car1 -> setbrandname("Toyota");
echo $car1 -> getbrandname();   //Toyota 

echo "<br/>";

$car2 = new vehicle();
echo $car1 -> getbrandname();
$car1 -> setbrandname("Mazda");
echo $car1 -> getbrandname();   //Mazda 

echo "<hr/>";



?>