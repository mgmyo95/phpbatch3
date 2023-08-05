<?php 

interface encrypt{
    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
}
                    // keyword
// password_hash(string,mixed)
//PASSWORD_DEFAULT;
//PASSWORD_BCRYPT

class myencryption implements encrypt{

    private $passcode;

    public function setpasscode($plaintext){

        $this -> passcode = $plaintext;

    }

    public function passworddef(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_DEFAULT);

        echo "This is before encrypt  {$this -> passcode} <br/> and after encrypt $newpasscode <br/>";

    }

    public function passwordbcr(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_BCRYPT);

        echo "This is before encrypt  {$this -> passcode} <br/> and after encrypt $newpasscode <br/>";

    }

    public function passwordvry(){

    }

}


echo "This is Encryption <br/>";

$obj = new myencryption();
$obj -> setpasscode("password123");
$obj -> passworddef();
$obj -> passwordbcr();

echo "<hr/>";

// 4EN

?>


