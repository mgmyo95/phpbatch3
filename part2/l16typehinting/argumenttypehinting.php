<?php 

//Todo => Note:: Type hinting is concept that provides hints to function for the expected data type of argument.

//Todo : Advantages of type hinting 
//* helps users debug the code easily or the code provides error very specifically.
//* a great conept for static kind of data.

//Todo : Disadvantages of type hinting 
//* function only take one type of data 
//* the dynamic data or argument are not there

//? declare(strict_types=1)  1 = true , 0 = false
// declare(strict_types=1);
declare(strict_types=1);

class myhint1{

    public function getdata( $val){
        echo $val ."<br/>";
    }

}   

echo "This is Argument Type Hinting <br/>";

$obj1 = new myhint1();
$obj1 -> getdata('aung aung');  //! aung aung
$obj1 -> getdata('10');  //! 10
$obj1 -> getdata(100);  //! 100 
$obj1 -> getdata(25.55);  //! 25.55 
$obj1 -> getdata(true);  //! true
// $obj1 -> getdata(['red','green','blue']);

echo "<hr/>";

class myhint2{

    public function getdata(string $val){
        echo $val ."<br/>";
    }

}   

echo "This is Argument Type Hinting <br/>";

$obj2 = new myhint2();
$obj2 -> getdata('aung aung');  //* aung aung aung aung
$obj2 -> getdata('10');  //* 10 10
// $obj2 -> getdata(100);  //! 100 
// $obj2 -> getdata(25.55);  //! 25.55 
// $obj2 -> getdata(true);  //! true
// $obj1 -> getdata(['red','green','blue']);  //! error

echo "<hr/>";

class myhint3{

    public function getdata(int $val){
        echo $val ."<br/>";
    }

}   


$obj3 = new myhint3();
// $obj3 -> getdata('aung aung');  //! error
// $obj3 -> getdata('10');  //! error
$obj3 -> getdata(100);  //* 100 
// $obj3 -> getdata(25.55);  //! 25.55 
// $obj3 -> getdata(true);  //! true
// $obj3 -> getdata(['red','green','blue']);  //! error

echo "<hr/>";

class myhint4{

    public function getdata(bool $val){
        echo $val ."<br/>";
    }

}   


$obj4 = new myhint4();
// $obj4 -> getdata('aung aung');  //! 1 error
// $obj4 -> getdata('10');  //! 1 error
// $obj4 -> getdata(100);  //! 1 100 
// $obj4 -> getdata(25.55);  //! 1 25.55 
$obj4 -> getdata(true);  //* 1
// $obj3 -> getdata(['red','green','blue']);  //! error

echo "<hr/>";

class myhint5{

    public function getdata(float $val){
        echo $val ."<br/>";
    }

}   


$obj5 = new myhint5();
// $obj5 -> getdata('aung aung');  //! aung aung error
// $obj5 -> getdata('10');  //! 10 error
$obj5 -> getdata(100);  //* 1 100 
$obj5 -> getdata(25.55);  //* 1 25.55 
// $obj5 -> getdata(true);  //! 1
// $obj3 -> getdata(['red','green','blue']);  //! error

echo "<hr/>";

class myhint6{

    public function getdata(array $val){
        echo $val ."<br/>";
    }

}   


$obj6 = new myhint6();
// $obj6 -> getdata('aung aung');  //!  error
// $obj6 -> getdata('10');  //!  error
// $obj6 -> getdata(100);  //!  error 
// $obj6 -> getdata(25.55);  //! error
// $obj6 -> getdata(true);  //! error
$obj6 -> getdata(['red','green','blue']);  //* array  array

echo "<hr/>";

class myhint7{

    public function total(array $arrs){
        $result = 0;

        foreach($arrs as $arr){
            // $result += $arr;

            $result = $result + $arr;
        }

        echo $result;

    }

}

$obj7 = new myhint7();
$obj7 -> total([10,20,30,40,50]);  //! 150

echo "<hr/>";

class phone{

    protected $brand;
    protected $hasfacesensor;
    protected $numberofsim;
    protected $price;

    public function setbrand(string $value){
        $this -> brand = $value;
    }

    public function hasfacesensor(bool $value){
        $this -> hasfacesensor = $value;
    }

    public function numberofsim(int $value){
        $this -> numberofsim = $value;
    }

    public function setprice(float $value){
        $this -> price = $value;
    }

    public function getinfo(){
        echo "Brand Name = " . $this -> brand . "<br/>";
        echo "hasfacesensor Name = " . $this -> hasfacesensor . "<br/>";
        echo "numberofsim Name = " . $this -> numberofsim . "<br/>";
        echo "price Name = " . $this -> price . "<br/>";
    }

}

$objphone = new phone();
echo $objphone -> setbrand('iphone');
echo $objphone -> hasfacesensor(true);
echo $objphone -> numberofsim(2);
echo $objphone -> setprice(999.65);

$objphone -> getinfo();
echo "<hr/>";

?>