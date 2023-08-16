<?php 

interface encrypt{
    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
}
                    // keyword
// password_hash(string,mixed)
//keyword
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
        
        $plaintextone = "password123";
        $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
        echo "Password hash with PASSWORD_DEFAULT" . $enccodeone;
        echo "<br> <br/>";

        $plaintexttwo = "password12345";
        $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
        echo "Password hash with PASSWORD_BCRYPT" . $enccodetwo;
        echo "<br> <br/>";

        $verify = password_verify($plaintextone,$enccodeone);

        if($verify){
            echo "OKI";
        }else{
            echo "Failed";
        }

    }

    public function passwordmd5(){
        // md5 = Message Digest
        // =>md5(string,raw)
        //NOTE::Raw Optional(TRUE,true,FALSE,false)
        // TRUE/true = Raw 16 characters binary format // P��H���H�dZ�d�N
        // FALSE/false = DEFAULT . 32 Characters hax number (string and number mixed)

        $passcode = 'Howareyou';
        echo "Before encrypt with md5 = " . $passcode . "<br/>";
        echo "After encrypt with md5 = " . md5($passcode) . "<br/>";
        echo "After encrypt with md5 by FALSE = " . md5($passcode,false) . "<br/>";
        echo "After encrypt with md5 by TRUE = " . md5($passcode,true) . "<br/>";

        $getpassword = "50f78848caedb0489b1f645ad364a64e";
        // $getpassword = "P��H���H�dZ�d�N";
        // $getpassword = md5($passcode,TRUE);

        if($getpassword === md5($passcode)){
            echo "Password Match with md5 32 chars hax number";
        }elseif($getpassword === md5($passcode,TRUE)){
            echo "Password Match with md5 16 chars binary number";
        }else{
            echo "Password do not match";
        }

        //  if($getpassword === md5($passcode)){
        //     echo "Password Match with md5 32 chars hax number";
        // }elseif($getpassword === md5($passcode,true)){
        //     echo "Password Match with md5 16 chars binary number"; //can't match cuz it's binary code
        // }else{
        //     echo "Password do not match";
        // }

    }

    public function sha1(){
        //Secure Hash Algorithm
        // =>sha1(string,raw)
        //NOTE::Raw Optional(TRUE,true,FALSE,false)
        // TRUE/true = Raw 20 characters binary format // t����.NRq�E����� �
        // FALSE/false = DEFAULT . 40 Characters hax number (string and number mixed)

        $passcode = 'goodluck';
        echo "Before encrypt with sha1 = " . $passcode . "<br/>";
        echo "After encrypt with sha1 = " . sha1($passcode) . "<br/>";
        echo "After encrypt with sha1 by FALSE = " . sha1($passcode,false) . "<br/>";
        echo "After encrypt with sha1 by TRUE = " . sha1($passcode,true) . "<hr/>";

        $getpassword = "748ad6ccd32e4e52718445bb1cadc01eb08a0df6";
        // $getpassword = "P��H���H�dZ�d�N"; //can't match cuz it's binary
        // $getpassword = md5($passcode,TRUE);

        if($getpassword === sha1($passcode)){
            echo "Password Match with md5 40 chars hax number";
        }elseif($getpassword === sha1($passcode,TRUE)){
            echo "Password Match with md5 20 chars binary number";  //can't match cuz it's binary
        }else{
            echo "Password do not match";
        }

    }

    public function passwordcrypt(){

        // =>crypt(string,)
        $passcode = "ilovemyjob";
        $cryptkey = "12345sdfsdf";
        // $cryptkey = "accdwerewd";  //Password do not match
        echo "Before encrypt with crypt = " . $passcode . "<br/>";
        echo "After encrypt with crypt = " . crypt($passcode,$cryptkey) . "<hr/>";

        $getpassword = "12HfyUaX52St6";

        if($getpassword === crypt($passcode,$cryptkey)){
            echo "Password Match";
        }else{
            echo "Password do not match";
        }

    }

}


echo "This is Encryption <br/>";

$obj = new myencryption();
$obj -> setpasscode("password123");
$obj -> passworddef();
$obj -> passwordbcr();
echo "<hr/>";
$obj -> passwordvry();
echo "<hr/>";
$obj -> passwordmd5();

echo "<hr/>";
$obj -> sha1();
echo "<hr/>";
$obj -> passwordcrypt();

//=>Description
// password_verify(string,hash);

// $plaintextone = "password123";
// $enccode = password_hash($plaintextone,PASSWORD_DEFAULT);
// echo "Password hash with PASSWORD_DEFAULT" . $enccode;
// echo "<br> <br/>";

// $verify = password_verify($plaintextone,$enccode);

// if($verify){
//     echo "OKI";
// }else{
//     echo "Failed";
// }



// $plaintextone = "password123";
// $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
// echo "Password hash with PASSWORD_DEFAULT" . $enccodeone;
// echo "<br> <br/>";

// $plaintexttwo = "password12345";
// $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
// echo "Password hash with PASSWORD_DEFAULT" . $enccodetwo;
// echo "<br> <br/>";

// $verify = password_verify($enccodeone,$enccodetwo);

// if($verify){
//     echo "OKI";
// }else{
//     echo "Failed";
// }

echo "<hr/>";

// 16PC

?>


