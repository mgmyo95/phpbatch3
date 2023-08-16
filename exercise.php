<?php 
ini_set('display_errors',1);

interface encrypt{
    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
}


class exercise implements encrypt{
    private $passcode;
    public function setpasscode($plaintext){
        $this -> passcode = $plaintext;
    }

    public function passworddef(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_DEFAULT);
        echo "Before encrypt is {$this -> passcode} <br/> and after encrypt is $newpasscode <br/>";

    }

    public function passwordbcr(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_BCRYPT);
        echo "Before encrypt is {$this -> passcode} <br/> and after encrypt is $newpasscode <br/>";
        
    }

    public function passwordvry(){

        $plaintextone = "password123";
        $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
        echo "Password hash with password default = " . $enccodeone . "<br/>";

        $plaintexttwo = "password12345";
        $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
        echo "Passowrd hash with password_bcrypt = " . $enccodetwo . "<br/>";

        $verify = password_verify($plaintextone,$enccodeone);

        if($verify){
            echo "OKI";
        }else{
            echo "Failed";
        }
    }

    public function passwordmd5(){

        //Message Digest 
        //=>md5(string,raw);
        //=>
                                
    }

}

$obj = new exercise();
$obj -> passworddef();
$obj -> passwordbcr();

echo "<hr/>";

$obj -> passwordvry();
echo "<hr/>";

$obj -> passwordmd5();


?>