<?php 
date_default_timezone_set('Asia/Yangon');
ini_set('display_errors',1);

class mymagicconstant{

    public function getclassname1(){
        echo __CLASS__ . "<br/>";
    }   

    public function getclassname2(){
        echo get_class($this) . "<br/>";
    }

    public function getfunname(){
        echo __FUNCTION__ . "<br/>";
    }

    public static function getfunname2(){
        echo __FUNCTION__ . "<br/>";
    }

    public function getmethod1(){
        echo __METHOD__ . "<br/>";
    }

    public static function getmethod2(){
        echo __METHOD__ . "<br/>";
    }

    public function getdir(){
        echo __DIR__ . "<br/>";
    }

    public function getfile(){
        echo __FILE__ . "<br/>";
    }

    public function getline(){
        echo __LINE__ . "<br/>";
    }

}

trait access{

    public $email = "kyaw@gmail.com";
    private $password = "123456";

    //! __trait__ must be parent trait 
    public function gettrait(){
        echo __TRAIT__ . "<br/>";
    }

}

class auth{
    use access;
    public function login(){
        echo "This is user login. Email is {$this -> email} and password is {$this -> password} <br/>";
    }
}

echo "This is magic constant <br/>";
$obj = new mymagicconstant();
$obj -> getclassname1();  //! mymagicconstant
$obj -> getclassname2();  //! mymagicconstant
$obj -> getfunname();  //! getfunname
$obj -> getfunname2(); //! getfunname2
$obj -> getmethod1();  //! mymagicconstant::getmethod1
$obj -> getmethod2();  //! mymagicconstant::getmethod2
$obj -> getdir();  //! C:\xampp\htdocs\phpbatch3
$obj -> getfile();  //! C:\xampp\htdocs\phpbatch3\exercise.php
$obj -> getline();  //! 40
echo "<hr/>";

$obj2 = new auth();
$obj2 -> gettrait();



?>