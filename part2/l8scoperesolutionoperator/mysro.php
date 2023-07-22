<?php 

//:: = sro = scope resolution operator

//Note :: define() can't set in class method 

class mysro{
        //properties
    const GREETING = "Hello Friend. Good evening from Thailand";
    const THANKS = "Hi friend. Thanks for visiting our country.";


    public $fullname = "Honey Nway Oo";

    //own method or member function 
    public function sayhi(){         
        echo self::GREETING;
    }

     //own method or member function 
    public function saythank(){       //can overwrite
        echo static::THANKS;
    }

    public function __construct(){
        echo "I am start working by automatically from Main Class. hee hee <br/>";
    }

    public function asset(){
        echo "I bought a new Toyota Car. <br/>";
    }

}

class child1 extends mysro{

}

class child2 extends mysro{

    const GREETING = "Hello Friend. Good Morning from Srilanka";
    const THANKS = "Hi friend. See you again";

    public function sayhifi(){      //can't overwrite
        echo self::GREETING;        //inherit echo self and static are same result 
    }

    public function saybye(){
        echo self::THANKS;          //inherit echo self and static are same result 
    }

    

}

class child3 extends mysro{

    //Method Overwrite - Parent Method Overwrite 
    public function __construct(){
        parent::__construct();  //parent keyword
        echo "I am start working by automatically from Sub Class <br/>";
    }

    public function asset(){
        parent::asset();      //parent keyword
        echo "I bought a new Mazda Car. <br/>";
    }

}

echo "This is Scrop Resolution Operator <br/>";

$obj = new mysro();  //I am start working by automatically from Main Class. hee hee
echo $obj -> fullname . "<br/>";  //Aung Aung Kyaw
echo $obj::GREETING . "<br/>";   //Hello Frient. Good evening from Thailand
echo mysro::GREETING . "<br/>";  //Hello Frient. Good evening from Thailand
echo $obj -> sayhi();  //Hello FrienD. Good evening from Thailand
echo "<br/>";

echo $obj -> saythank();  //Hi friend. Thanks for visiting our country.
echo "<br/>";

echo "<hr/>";

echo "This is Scrop Resolution Operator Child 1<br/>";

$ch1 = new child1(); //I am start working by automatically from Main Class. hee hee
// echo $ch1 -> fullname; //Hani Nway Oo
echo "<br/>";
// echo $ch1::GREETING;   //Hello Frient. Good evening from Thailand
echo "<br/>";
// echo child1::GREETING;  //Hello Frient. Good evening from Thailand
echo "<br/>";
// echo $ch1 -> sayhi();  //Hello FrienD. Good evening from Thailand
echo "<br/>";
// echo $ch1 -> saythank();  //Hi friend. Thanks for visiting our country.
echo "<hr/>";

echo "This is Scrop Resolution Operator Child 2<br/>";
$ch2 = new child2(); //I am start working by automatically from Main Class. hee hee
echo $ch2 -> fullname; //Hani Nway Oo
echo "<br/>";
echo $ch2::GREETING;   //Hello Friend. Good Morning from srilanka
echo "<br/>";
echo child2::THANKS;  //Hello Friend. See You Again
echo "<br/>";
echo $ch2 -> sayhi();  //Hello FrienD. Good evening from Thailand
echo "<br/>";
echo $ch2 -> saythank();  //Hi friend. See you again
echo "<br/>";
echo $ch2 -> sayhifi();  //Hello FrienD. Good evening from Thailand
echo "<br/>";
echo "<hr/>";

echo "This is Scrop Resolution Operator Child 3<br/>";

$ch3 = new child3(); //I am start working by automatically from Main Class. hee hee
// echo $ch1 -> fullname; //Hani Nway Oo
echo "<br/>";
echo $ch3::GREETING;   //Hello Frient. Good evening from Thailand
echo "<br/>";
echo child3::THANKS;  //Hi friend. Thanks for visiting our country.
echo "<br/>";
echo $ch3 -> sayhi();  //Hello FrienD. Good evening from Thailand
echo "<br/>";
echo $ch3 -> saythank();  //Hi friend. Thanks for visiting our country.
echo "<br/>";
echo $ch3 -> asset();  //I bought a new Toyota Car. // I bought a new Mazda Car.

echo "<hr/>";


?>
