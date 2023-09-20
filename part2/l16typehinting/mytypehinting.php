<?php 
declare(strict_types = 1);  //* on
//* void = data set / data assign

class mytypehinting{

    public $name;

    public function getname():string{
        return $this -> name;
    }

    public function setname(string $val):void{
        $this -> name = $val;
    }

}

class person extends mytypehinting{

    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this -> userid = $arr['id'];
        $this -> username = $arr['name'];

    }

}

echo "This is type hinting <br/>";

$obj1 = new mytypehinting();
$obj1 -> setname('Aung Kyaw Kyaw');
echo $obj1 -> getname();

$obj2 = new person();
$obj2 -> setname('aye aye');
echo $obj2 -> getname();
$datas = ['id'=>1,'name'=>'Hony Nway Oo'];

echo $obj2 -> setinfo($datas) . "<br/>";
echo $obj2 -> userid . "<br/>";
echo $obj2 -> username . "<br/>";

echo "<hr/>";

?>