<?php 

class staticvsnonestatic{

    //Member Properties
    //Static properties 
    public static $city = "Mandalay";

    //Non-static properties 
    public $fullname = "Honey Nway Oo";

    //Constant 
    const GENDER = "Female";


    //Member Functions 
    //Non-Static Method 
    //Non-static method = static property & non-static property can call;
    //Non-static method = non-static method & static method can call;
    public function getname(){
        echo "I am Non-static method. <br/>";

        echo "Name is {$this -> fullname} <br/>";
    }

    public function getcity(){
        echo "I am Non-static method. <br/>";

        echo "City is " . self::$city . "& Hometown is" . static::$city ."<br/>";
    }

    public function getgender(){
        echo "I am Non-static method. <br/>";

        echo "Gender is " . self::GENDER ."<br/>";
    }

    public function car(){
        echo "I am non-static method . <br/>";

        $brand = static::carbrand();
        echo "I bought a new ${brand} car <br/>";
    }

    public function mobilebrand(){
        return "iphone 14 Pro Max";
    }

    public function beforebuy(){
        echo "I am Non-static method. <br/>";

        $brand = $this -> mobilebrand();
        echo "I am thinking about to buy a new ${brand} <br/>";
    }

    //Static Method 
    //static method can't use non-static property
    //static method can't use non-static method

    // public static function getstaticname(){
    //     echo "I am static method. <br/>";

    //     echo "Name is {$this -> fullname} <br/>";
    // }

    public static function getstaticcity(){
        echo "I am static method. <br/>";

        echo "City is " . self::$city . "& Hometown is" . static::$city ."<br/>";
    }

    public static function getstaticgender(){
        echo "I am static method. <br/>";

        echo "Gender is " . self::GENDER ."<br/>";
    }

    public static function carbrand(){
        return "Toyota Lexus LX570";
    }

    //error coz static method can't use non-static method 
    // public static function mobile(){
    //     echo "I am static method. <br/>";

    //     $brand = $this -> mobilebrand();
    //     echo "I bought a new brand ${brand} <br/>";
    // }

    public static function afterbuy(){
        echo "I am static method. <br/>";

        $brand = self::carbrand();
        echo "I am lovely my new ${brand} car <br/>";
    }
    

}



echo "This is static vs nonestatic <br/>";

$obj = new staticvsnonestatic();

//Calling non-static property 
echo $obj -> fullname;  //Honey Nway Oo
echo "<br/>";
echo "<br/>";

//Calling static property 
echo $obj::$city;   
echo "<br/>";

//Calling constant 
echo $obj::GENDER;
echo "<br/>";

//Calling non-static method
$obj -> getname();
echo "<br/>";
$obj -> getcity();
echo "<br/>";
$obj -> getgender();
echo "<br/>";

echo "<hr/>";

//Calling Static Method 
$obj::getstaticcity();
echo "<br/>";
$obj::getstaticgender();
echo "<br/>";
echo "<br/>";

staticvsnonestatic::getstaticcity(); //City is Mandalay& Hometown isMandalay
echo "<br/>";
staticvsnonestatic::getstaticgender();  //Gender is Female

echo"<br/>";

$obj -> car();
echo "<br/>";

// $obj::mobile();  //error coz static method can't use non-static method 

echo "<hr/>";

$obj -> beforebuy();
echo "<br/>";

$obj::afterbuy();


echo "<hr/>";

//25ST

?>