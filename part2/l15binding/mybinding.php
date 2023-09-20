<?php 

//! php ka compile , transpile yaw do 

//?=> Data binding 
//? (i) static binding (or) Early Binding
//? (ii) Dynamic binding (or) Late Binding

//* binding everything before program running / static binding / Early Binding
//* Index.php > Compile > Execute 
//* echo 1+1    10101100    2 

//* program run time Dynamic binding / Late Binding
//* Index.php > Transpile > Execute 
//* echo 1+1    10101100     2 

class hola1{

    public $name = "Ko Ko";

    public function friend(){
        return "My best friend name is " . $this -> name . "<br/>";
    }

    public function getfriend(){
        echo $this -> friend();
    }

}

class hola2 extends hola1{

    public function friend(){
        return "My best friend name are " . $this -> name . " and aye aye <br/>";
    }

}

echo "This is data binding . <br/>";

$obj = new hola1();
echo $obj -> friend();  //!My best friend name is Ko Ko
$obj -> getfriend();  //!My best friend name is Ko Ko
echo "<hr/>";

$obj2 = new hola2();
echo $obj2 -> friend();  //! My best friend name are Ko Ko and aye aye
$obj2 -> getfriend();  //! My best friend name are Ko Ko and aye aye


echo "<hr/>";

class hola3{

    public static $name = "Ko Ko";

    public static function friend(){
        return "My best friend name is " . self::$name . "<br/>";
    }

    public static function getfriend(){
        //echo self::friend();   //? early binding
        echo static::friend();  //? late binding
    }

}

class hola4 extends hola3{

    public static function friend(){
        return "My best friend name are " . self::$name . " and aye aye <br/>";
    }

    // public static function getfriend(){
    //     echo self::friend();
    // }

}

echo "This is data early binding . <br/>";

$obj3 = new hola3();
echo $obj3::friend();  //!My best friend name is Ko Ko
$obj3::getfriend();  //!My best friend name is Ko Ko
echo "<hr/>";

$obj4 = new hola4();
echo $obj4::friend();  //! My best friend name are Ko Ko and aye aye
$obj4->getfriend();  //! My best friend name are Ko Ko and aye aye

?>