<?php 
date_default_timezone_set("Asia/Yangon");
ini_set("display_errors",1);

interface post{

    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();

}

class exercise implements post{

    private $passcode;

    public function setpasscode($plaintext){
        $this -> passcode = $plaintext;
    }

    public function passworddef(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_DEFAULT);
        echo "This is before encrypt {$this -> passcode} and <br/> After encrypt $newpasscode <br/>";

    }

    public function passwordbcr(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_BCRYPT);
        echo "This is before encrypt {$this -> passcode} and <br/> After encrypt $newpasscode <br/>";

    }

    public function passwordvry(){

        

    }

}

$obj = new exercise();
$obj -> setpasscode("password234234");
$obj -> passworddef();
$obj -> passwordbcr();

?>