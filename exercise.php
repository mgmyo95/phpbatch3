<?php 
declare(strict_types = 1);
date_default_timezone_set("Asia/Yangon");
ini_set("display_errors",1);

class myhint{

    public function getdata(int $x,string $y):int{
        return $x+$y;
    }

}

class myhint1{

    public function getdata(float $val):float{
        return $val;
    }

}

echo "This is return type hinting <br/>";

$obj = new myhint();
echo $obj -> getdata(100,"10");
echo "<hr/>";

$obj1 = new myhint1();
echo $obj1 -> getdata(23.33);


?>

