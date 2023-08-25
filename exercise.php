<?php 
date_default_timezone_set('Asia/Yangon');
ini_set('display_errors',1);
session_start();

interface encrypt{
    public function setpassword($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
}

//password_hash(string,keyword)
//PASSWORD_DEFAULT;
//PASSWORD_BCRYPT 

class exercise implements encrypt{
    private $passcode;
    public function setpassword($plaintext){
        $this -> passcode = $plaintext;
    }

    public function passworddef(){

        $newpasscode = password_hash($this -> passcode,PASSWORD_DEFAULT);
        echo "This is before encrypt {$this -> passcode} <br/> and after encrypt is $newpasscode <br/>";

    }

    public function passwordbcr(){
        $newpasscode = password_hash($this -> passcode,PASSWORD_BCRYPT);
        echo "This is after encrypt {$this -> passcode} <br/> and after encrypt is $newpasscode <br/>";
    }

    public function passwordvry(){

        $plaintextone = "password1234";
        $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
        // echo "Password hash with PASSWORD_DEFAULT" . $enccodeone;

        $verify = password_verify($plaintextone,$enccodeone);

        if($verify){
            echo "OKI";
        }else{
            echo "Failed";
        }
        
    }

    public function passwordmd5(){

        //md5 = message digest();
        $passcode = "howareyou";
        echo "Before encrypt with md5 = " . $passcode . "<br/>";
        echo "After encrypt with md5 = " . md5($passcode) . "<br/>";
        echo "After encrypt with md5 FALSE = " . md5($passcode,FALSE) . "<br/>"; //b47123e4109e6839adb7ae2a28300d96
        echo "After encrypt with md5 TRUE = " . md5($passcode,TRUE) . "<br/>"; //�q#��h9���*(0 �

        $getpassword = md5($passcode,true);
        echo "<hr/>";

        if($getpassword === md5($passcode)){
            echo "Password Match with md5 32 chars hax number";
        }elseif($getpassword === md5($passcode,TRUE)){
            echo "Password Match with md5 16 chars binary number";
        }else{
            echo "Password Match with md5 16 chars binary number";
        }
        
    }

    public function passwordsha1(){

        //sha1 = secure hash algorithm
        $passcode = "goodluck";
        echo "Before encrypt with sha1 = " . $passcode . "<br/>";
        echo "After encrypt with sha1 = " . sha1($passcode) . "<br/>";
        echo "After encrypt with sha1 FALSE = " . sha1($passcode,FALSE) . "<br/>"; //b47123e4109e6839adb7ae2a28300d96
        echo "After encrypt with sha1 TRUE = " . sha1($passcode,TRUE) . "<br/>"; //�q#��h9���*(0 �

        $getpassword = sha1($passcode,true);
        echo "<hr/>";

        if($getpassword === sha1($passcode)){
            echo "Password Match with sha1 40 chars hax number";
        }elseif($getpassword === sha1($passcode,TRUE)){
            echo "Password Match with sha1 20 chars binary number";
        }else{
            echo "Password Match with sha1 20 chars binary number";
        }
        
    }

    public function passwordcrypt(){

        $passcode = "ilovemyjob";
        $newkey = "123lkjsdfersdf"; 

        echo "Before encrypt with crypt = " . $passcode . "<br/>";
        echo "After encrypt with crypt = " . crypt($passcode,$newkey) . "<br/>";

        $getpassword = "12HfyUaX52St6";

        if($getpassword === crypt($passcode,$newkey)){
            echo "Password Match";
        }else{
            echo "Password do not Match";
        }

    }

}

$obj = new exercise();
$obj -> setpassword('password123');
$obj -> passworddef();
$obj -> passwordbcr();
echo "<hr/>";

$obj -> passwordvry();
echo "<hr/>";

$obj -> passwordmd5();
echo "<hr/>";

$obj -> passwordsha1();
echo "<hr/>";

$obj -> passwordcrypt();


?>