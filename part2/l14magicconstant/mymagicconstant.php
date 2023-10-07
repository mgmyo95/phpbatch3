<?php 

class mymagicconstant{

    public function getclassname1(){
        echo __CLASS__ . "<br/>";
    }

    public function getclassname2(){
        echo get_class($this) . "<br/>";
    }

    public function getfunname1(){
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

    public $email = "honey@gmail.com";
    public $password = "123456";

    //! __TRAIT__ must be exits parent trait
    public function gettrait(){
        echo __TRAIT__ . "<br/>";
    }

}

class auth{
    use access;
    public function login(){
        echo "This is user login . Email is {$this -> email} & password is {$this -> password} <br/>";
    }
}


echo "This is Magic Constant <br/>";
$obj = new mymagicconstant();
$obj -> getclassname1();  //! mymagicconstant
$obj -> getclassname2();  //! mymagicconstant

$obj -> getfunname1();  //! getfunname1
$obj::getfunname2();  //! getfunname1

$obj -> getmethod1();  //! mymagicconstant::getmethod1 
$obj::getmethod2();  //!mymagicconstant::getmethod2

$obj -> getdir();  //! C:\xampp\htdocs\phpbatch3\part2\l14magicconstan (working diretory folder path)

$obj -> getfile();  //! C:\xampp\htdocs\phpbatch3\part2\l14magicconstan\mymagicconstant.php (working diretory file path)

$obj -> getline();  //todo 38

echo "<hr/>";

$obj2 = new auth();
$obj2 -> login();  //! This is user login . Email is honey@gmail.com & password is 123456
$obj2 -> gettrait(); //* access

?>