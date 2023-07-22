<?php 



class classconstant{

    //Member Variables 
    // public $name = "aung aung";

    const NAME = "Myan Hnin Yee Lwin <br/>";
    public const CITY = "Yangon <br/>";
    protected const EMAIL = "mamamya@gmail.com <br/>";
    private const PASSWORD = "123456 <br/>";

    //Member Functions 
    public function getinfo(){
        echo "Name is " . self::NAME . " & she live in " . self::CITY;
    }

    public function getaccess(){
        echo "Email is " . self::EMAIL . " & password is " . self::PASSWORD;
    }

}

class baby1 extends classconstant{

}

class baby2 extends classconstant{
    //Member Functions 
    public function getcontent(){
        echo "Name is " . self::NAME . " & she live in " . self::CITY;
    }

    public function getemail(){
        echo "Email is " . self::EMAIL;
    }

    //this method is not useless cuz password was private 
    // public function getpassword(){
    //     echo "Password is " . self::PASSWORD;
    // }
}

echo "This is class constant <br/>";

$obj = new classconstant();
echo $obj::NAME;   //Myan Hnin Yee Lwin
echo "<br/>";
echo $obj::CITY;
// echo $obj::EMAIL;  //error cuz it's was protected
// echo $obj::PASSWORD; //error cuz it's was private  

echo "<br/>";

$obj -> getinfo();   //Name is Myan Hnin Yee Lwin & she live in Yangon
$obj -> getaccess();  //Email is mamamya@gmail.com & password is 123456

echo "<hr/>";

echo "This is class constant baby1 <br/>";

$bb1 = new baby1();
echo $bb1::NAME;   //Myan Hnin Yee Lwin
echo "<br/>";
echo $bb1::CITY;
// echo $obj::EMAIL;  //error cuz it's was protected
// echo $obj::PASSWORD; //error cuz it's was private  

echo "<br/>";

$bb1 -> getinfo();   //Name is Myan Hnin Yee Lwin & she live in Yangon
$bb1 -> getaccess();  //Email is mamamya@gmail.com & password is 123456

echo "<hr/>";

echo "This is class constant baby1 <br/>";

$bb2 = new baby2();
echo $bb2::NAME;   //Myan Hnin Yee Lwin
echo "<br/>";
echo $bb2::CITY;
// echo $obj::EMAIL;  //error cuz it's was protected
// echo $obj::PASSWORD; //error cuz it's was private  

echo "<br/>";

$bb2 -> getcontent();   //Name is Myan Hnin Yee Lwin & she live in Yangon
$bb2 -> getaccess();  //Email is mamamya@gmail.com & password is 123456
$bb2 -> getcontent(); 
$bb2 -> getemail();
// $bb2 -> getpassword();  //error cuz password was private 

echo "<hr/>";



?>