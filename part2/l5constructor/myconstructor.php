<?php 

class myconstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    //Magic Method (or) constructor Method do first
    
    // public function __construct(){
    //     echo "I am start working by automatically !! here hee : p";
    // }

    // public function __construct($name){
    //     echo "I am ${name} . I am start working by automatically !! here hee : p";
    // }

    public function __construct(){
        $result = $this -> num1 + $this -> num2 + $this -> num3;
        echo "{$this -> message} : $result <br/>";
    }

}

// $obj = new myconstructor();  //I am start working by automatically !! here hee : p
// $obj = new myconstructor('Robot');  //I am Robort . I am start working by automatically !! here hee : p

echo "This is constructor <br/>";
$obj = new myconstructor();
echo "<hr/>";

?>