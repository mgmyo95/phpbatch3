<?php 

//? Note : must return
//* output return
declare(strict_types = 1);

class myhint8{

    public function getdata($val){
        return $val;
    }

}

echo "This is return type hinting <br/>";

$obj8 = new myhint8();
echo $obj8 -> getdata('aung aung'); //! aung aung
echo $obj8 -> getdata("10"); //! 10
echo $obj8 -> getdata(100); //! 100
echo $obj8 -> getdata(25.55); //! 25.55
echo $obj8 -> getdata(true); //! 1
// echo $obj8 -> getdata(['red','green','blue']); //! array

echo "<hr/>";

class myhint9{

    public function getdata(string $val):string{
        return $val;
    }

}

$obj9 = new myhint9();
echo $obj9 -> getdata('aung aung'); //! aung aung
echo $obj9 -> getdata("10"); //! 10

echo "<hr/>";

class myhint10{

    public function getdata(int $val):int{
        return $val;
    }

}

$obj10 = new myhint10();
echo $obj10 -> getdata(100); //! 100
echo "<hr/>";

class myhint11{

    public function getdata(int $x,string $y):int{
        return $x+$y;
    }

}

$obj11 = new myhint11();
echo $obj11 -> getdata(10,'200'); //! 210
echo "<hr/>";

class myhint12{

    public function getdata(bool $val):bool{
        return $val;
    }

}

$obj12 = new myhint12();
echo $obj12 -> getdata(true); //! 1
echo "<hr/>";

class myhint13{

    public function getdata(float $val):float{
        return $val;
    }

}

$obj13 = new myhint13();
echo $obj13 -> getdata(100); //! 100
echo $obj13 -> getdata(25.55); //! 25.55
echo "<hr/>";



?>