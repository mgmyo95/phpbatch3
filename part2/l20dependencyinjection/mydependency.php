<?php 


class course{

    public $courseidx;

    public function __construct($val){
        $this -> courseidx = $val;
    }

    public function getcourseidx(){
        echo "Course Index is = " . $this -> courseidx . "<br/>";
    }

}

class lesson extends course{
    public $lessonnumber;

    public function __construct($val){
        $this -> lessonnumber = $val;
    }

    public function getlessonnumber(){
        echo "Lesson Number is " . $this -> lessonnumber . "<br/>";
    }
}

echo "This is my dependency Injection <br/>";

$getcourse = new course(1);
$getcourse -> getcourseidx(); //? Course Index is = 1
// $getcourse -> getlessonnumber(); //! Error 
echo "<br/>";

$getlesson = new lesson(10);
$getlesson -> getlessonnumber(); //? Course Index is = 10
$getlesson -> getcourseidx(); //? Course Index is = 

echo "<hr/>";

//Todo => Parent to Chind

class vehicle{

    public $modelnumber;
    public $evcarobj;
    public $carmodeobj;

    public function __construct($val,$price,$type){
        $this -> modelnumber = $val;
        $this -> evcarobj = new evcar($price);
        $this -> carmodeobj = new carmode($type);

    }

    public function getmodelnumber(){
        echo "Vehicle Number is = " . $this -> modelnumber . "<br/>";
    }

}

class evcar extends vehicle{
    public $price;

    public function __construct($val){
        $this -> price = $val;
    }

    public function getprice(){
        echo "Ev car Price is " . $this -> price . "<br/>";
    }
}

class carmode extends vehicle{
    public $type;

    public function __construct($val){
        $this -> type = $val;
    }

    public function gettype(){
        echo "Ev car Type is " . $this -> type . "<br/>";
    }
}

$getvehicle = new vehicle(11111,20000,'Luxury');
$getvehicle -> getmodelnumber();
$getevcar = new evcar(10000);
$getevcar -> getprice();  //? Ev car price is = 10000
$getvehicle -> evcarobj -> getprice();  //? ev car price is = 20000
$getvehicle -> carmodeobj -> gettype();  //? car type is = luxury

echo "<hr/>";

//todo => child to parent


class phone{

    public $brand;

    public function __construct($val){
        $this -> brand = $val;
    }

    public function getbrand(){
        echo "Phone Brand is = " . $this -> brand . "<br/>";
    }

}

class phonemodel extends phone{
    public $price;
                                   //?class obj 
    public function __construct($val,phone $phone){
        $this -> price = $val;
        // $this -> brand = $phone -> brand;  //? to properties 
        $this -> brand = $phone -> getbrand();  //? to properties 
    }

    public function getprice(){
        echo "Phone Price is " . $this -> price . "<br/>";
    }
}

$getphone = new phone("iphone");
$getphone -> getbrand();

$getphonemodel = new phonemodel(500,$getphone);
$getphonemodel -> getprice();

// $getphonemodel -> getbrand();  //? Phone Brand is = iphone
//? Passing by properties
// echo $getphonemodel -> brand;  //? iphone

//? Passing by member method 
echo $getphonemodel -> brand;  //? iphone 





echo "<hr/>";




?>