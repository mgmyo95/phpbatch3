<?php 
declare(strict_types = 1);
date_default_timezone_set('Asia/Yangon');
ini_set('display_errors',1);

//? lambda with array walk 
$colors = array('a'=>'red','b'=>'green','c'=>'blue','d'=>'coral','e'=>'crimson');
$idx = 0;

array_walk($colors,function($value,$key,$p)use(&$idx){
    $idx++;
    echo "ID is {$idx} / key is {$key} and value is {$value} {$p} <br/>";
},'color');

echo "<hr/>";

class course{

    public $courseidx;

    public function __construct($val){
        $this -> courseidx = $val;
    }

    public function getcourseidx(){
        echo "Course idx is " . $this -> courseidx . "<br/>";
    }

}

class lesson extends course{

    public $lessonnumber;

    public function __construct($val){
        $this -> lessonnumber = $val;
    }

    public function getnumber(){
        echo "Number is " . $this -> lessonnumber . "<br/>";
    }

}

echo "This is my dependency injection <br/>";

$getcourse = new course(1);
$getcourse -> getcourseidx();
echo "<br/>";

$getlesson = new lesson(10);
$getlesson -> getnumber();
$getlesson -> getcourseidx();

echo "<hr/>";

//todo => Parent to Child 

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
        echo "Vehicle Number is " . $this -> modelnumber . "<br/>";
    }

}

class evcar extends vehicle{

    public $price;

    public function __construct($val){
        $this -> price = $val;
    }

    public function getprice(){
        echo "Evcar price is " . $this -> price . "<br/>";
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

$getvehicle = new vehicle(11111,20000,'luxury');
$getvehicle -> getmodelnumber();
$getvehicle -> evcarobj -> getprice();

echo "<br/>";

$getevcar = new evcar(10000);
$getevcar -> getprice();

echo "<hr/>";

// $getmode = new carmode();
// $getmode -> gettype();
$getvehicle -> carmodeobj -> gettype();
echo "<hr/>";

//todo => Child to Parent

class phone{

    public $brand;
    public function __construct($val){
        $this -> brand = $val;
    }

    public function getbrand(){
        echo "Phone brand is " . $this -> brand . "<br/>";
    }

}

class phonemodel extends phone{

    public $price;
    public function __construct($val,phone $phone){
        $this -> price = $val;
        $this -> brand = $phone -> brand;
    }

    public function getprice(){
        echo "Phone price is " . $this -> price . "<br/>";
    }

}

$getphone = new phone('oppo');
$getphone -> getbrand();
echo "<hr/>";

$getmodel = new phonemodel(100,$getphone);
$getmodel -> getprice();

$getmodel -> getbrand();






?>