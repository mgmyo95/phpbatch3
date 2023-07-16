<?php 

class bankbalance{
    public $accnum;         //class object
    public $name;  
    public $balance = 0;   

    public function depositamount($amount){
        $this -> balance = $this -> balance + $amount;
    }

    public function deductamount($amount){
        if($this -> balance <= 0){
            echo "No Balance , You do not have any money. <br/>";
        }

        if($this -> balance < $amount){
            echo "Insufiicient!! , You are trying to withdraw than you <br/>";
        }

        $this -> balance = $this -> balance - $amount;
    }


    public function checkbalance(){
        echo "Your Balance is : " . $this -> balance;
    }

}

$bank1 = new bankbalance();
$bank1 -> accnum = 1000;
$bank1 -> name = "Aung Aung";
$bank1 -> balance = 200000;

$bank1 -> checkbalance();
echo $bank1 -> depositamount(300000);
$bank1 -> checkbalance();


$bank2 = new bankbalance();
$bank2 -> accnum = 1000;
$bank2 -> name = "Kyaw Kyaw";
$bank2 -> balance = 300000;

$bank2 -> checkbalance();
$bank2 -> depositamount(200000);
$bank2 -> checkbalance();
$bank2 -> deductamount(400000);
$bank2 -> checkbalance();
$bank2 -> deductamount(50);
$bank2 -> depositamount(200);
$bank2 -> depositamount(300);
$bank2 -> checkbalance();  //450



?>

<!-- 14OP -->