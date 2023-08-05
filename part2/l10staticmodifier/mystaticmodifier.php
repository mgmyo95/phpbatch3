<?php 

class mystaticmodifier{

    //Static properties 
    public static $count = 0;

    //Non-static properties 
    public $idx = 0;
    
    //Static Method 

    //Non-Static Method 

    public function getvalue(){
        //Static properties 
        self::$count++;
        echo self::$count . "<br/>";

        //Non-static properties
        $this -> idx++;
        echo $this -> idx . "<br/>";
    }

    public function getresult(){
        //Static properties
        static::$count++;
        echo static::$count . "<br/>";

        //Non-static properties
        $this -> idx++;
        echo $this -> idx . "<br/>";
    }
    

}

class baby1 extends mystaticmodifier{

}

class baby2 extends mystaticmodifier{

    public function getmore(){
        //Static properties
        self::$count++;
        echo self::$count . "<br/>";

        //Non-static properties
        $this -> idx++;
        echo $this -> idx . "<br/>";
    }

}



echo "This is static Modidier <br/>";

$obj = new mystaticmodifier();
echo $obj::$count;       //0 caling from static property
echo "<br/>";
echo $obj -> idx;       //0 calling from Non-static property 
echo "<br/>";
$obj -> getvalue();  //11
$obj -> getvalue();  //22
$obj -> getvalue();  //33
$obj -> getvalue();  //44
echo "<br/>";

$obj -> getresult();  //55
$obj -> getresult();  //66
$obj -> getresult();  //77
$obj -> getresult();  //88

echo "<hr/>";

$bcj = new mystaticmodifier();
$bcj -> getvalue();  //9 1
$bcj -> getvalue();  //10 2
$bcj -> getvalue();  //11 3
$bcj -> getvalue();  //12 4

echo "<br/>";

$bcj -> getresult(); //13 5
$bcj -> getresult(); //14 6
$bcj -> getresult(); //15 7
$bcj -> getresult(); //16 8

echo "<hr/>";

$bb1 = new baby1();
$bb1 -> getvalue();  //17 1
$bb1 -> getvalue();  //18 2 
$bb1 -> getvalue();  //19 3 
$bb1 -> getvalue();  //20 4

echo "<br/>";

$bb1 -> getresult();  //21 5 
$bb1 -> getresult();  //22 6
$bb1 -> getresult();  //23 7
$bb1 -> getresult();  //24 8 

echo "<hr/>";

$bb2 = new baby2();

$bb2 -> getmore();  //25 1
$bb2 -> getmore();  //26 2
$bb2 -> getmore();  //27 3
$bb2 -> getmore();  //28 4

echo "<hr/>";

?>