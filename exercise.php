<?php 
declare(strict_types = 1);
date_default_timezone_set('Asia/Yangon');
ini_set('display_errors',1);


//* magic constant 
class mymagicconstant{

    public function getclassname1(){
        echo __CLASS__ . "<br/>";
    }

    public function getclassname2(){
        echo get_class($this) . "<br/>";
    }

    public function getmethod(){
        echo __METHOD__ . "<br/>";
    }

    public static function getmethod2(){
        echo __METHOD__ . "<br/>";
    }

    public function getfunction(){
        echo __FUNCTION__ . "<br/>";
    }

    public static function getfunction1(){
        echo __FUNCTION__ . "<br/>";
    }

    public function getfile(){
        echo __FILE__ . "<br/>";
    }

    public function getdir(){
        echo __DIR__ . "<br/>";
    }

    public function getline(){
        echo __LINE__ . "<br/>";
    }

}

trait access{

    public $email = "aung@gmail.com";
    public $password = "password12345";
 //! __TRAIT__ must be exits parent trait
    public function gettrait(){
        echo __TRAIT__ . "<br/>";
    }

}

class auth{
    use access;
    public function getlogin(){
        echo "This is user login , Email is {$this -> email} and password is {$this -> password} <br/>";
    }
}

$obj = new mymagicconstant();
$obj -> getclassname1();
$obj -> getclassname2();
$obj -> getmethod();
$obj -> getmethod2();
$obj -> getfunction();
$obj -> getfunction1();
$obj -> getfile();
$obj -> getdir();  
$obj -> getline(); 
echo "<hr/>";

$obj2 = new auth();
$obj2 -> gettrait();
$obj2 -> getlogin();

?>