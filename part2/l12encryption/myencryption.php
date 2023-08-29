<?php 

interface encrypt{
    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();

    public function strongpassword();
    public function passwordrehash();

    public function getciphermethod();
    public function customencrypt();
    public function customdecrypt();

    public function gethashingalgorithm();
    public function customstrongencrypt();
    public function customstrongdecrypt();
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

        echo strlen($newpasscode) . "<br/>"; //60

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

    public function passwordrehash(){
        $plaintext = "password123";
        $enccode = password_hash($plaintext,PASSWORD_DEFAULT);   
        echo "Password hash with PASSWORD_DEFAULT = " . $enccode . "<br/>";

        //['cost'] keyword 

        if(password_needs_rehash($enccode,PASSWORD_DEFAULT,['cost'=>12])){
            $rehashed = password_hash($plaintext,PASSWORD_DEFAULT,['cost'=>12]);
            echo $rehashed;
            echo "<br/>";
            echo strlen($rehashed) . "<br/>"; //60
        }else{
            echo "No Need to rehash";
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
            echo "Password Match with md5 16 chars binary number";
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
        echo strlen(crypt($passcode,$cryptkey));

        $getpassword = "12HfyUaX52St6";

        if($getpassword === crypt($passcode,$cryptkey)){
            echo "Password Match";
        }else{
            echo "Password do not match";
        }

    }

    public function strongpassword(){
        $passcode = "ilovemyjob";
        $newpassword = md5($passcode);
        $newpassword = sha1($newpassword);
        $newpassword = crypt($newpassword,$newpassword);

        echo "Before encrypt = " . $passcode . "<br/>";
        echo "After encrypt = " . $newpassword . "<br/>";
        echo "After encrypt by single line = " . md5(sha1(crypt($passcode,$passcode))) . "<br/>";

        $getpassword = "b87BFK8O.P4dE";

        if($getpassword === md5(sha1(crypt($passcode,$passcode)))){
            echo "Password Match";
        }else{
            echo "Password do not match";
        }
    }

    public function getciphermethod(){
        $ciphers = openssl_get_cipher_methods();
        echo "<pre>".print_r($ciphers,true)."</pre>";
    }


    public function customencrypt(){
        //almost use bank
        // openssl_encrypt(p,c,p,o,iv);       
                                           //encrypt key                        
        // openssl_encrypt(plaintext,cipher,passphrase,options,initalization vector)

        $plaintext = "ilovemyfriend";
        echo "Before encrypt = " . $plaintext . "<br/>";

        //cipher method 
        $cipher = "aes-128-cbc";

        //passphrase(encryption key)
        $encryptionkey = "abcdefg12345";

        //option
        $options = 0;  //OPENSSL_ZERO_PADDING is equal with 0 (or) OPENSSL_RAW_DATA(binary code)
        // $options = OPENSSL_ZERO_PADDING;
        // $options = OPENSSL_RAW_DATA;

        //initalization vector
        $iv = "12345678910";

        $finalencrypt = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);

        echo "After Encrypt = " . $finalencrypt . "<br/>";
        echo strlen($finalencrypt) . "<br/>"; //24

    }

    public function customdecrypt(){

         // openssl_encrypt(e,c,p,o,iv);       
                                           //encrypt key                        
        // openssl_decrypt(encrypt,cipher,passphrase,options,initalization vector)

        //encrypt
        $encrypt = "xqo4hgGDlVXzu2DiKnto3Q==";
        //cipher
        $cipher = "aes-128-cbc";
        //passphrase
        $encryptionkey = "abcdefg12345"; 
        //option 
        $options = 0;
        //iv 
        $iv = "12345678910";

        $finaldecrypt = openssl_decrypt($encrypt,$cipher,$encryptionkey,$options,$iv);

        echo "After Decrypt = " . $finaldecrypt . "<br/>";


    }

    public function gethashingalgorithm(){
        $hashalgorithms = hash_hmac_algos(); //keyed-hash message authentication code

        echo "<pre>".print_r($hashalgorithms,true)."</pre>";
    }

    public function customstrongencrypt(){

        //openssl_encrypt(p,c,p,o,iv)

        $plaintext = "ilovemyfriend";
        echo "Before encrypt = " . $plaintext . "<br/>";

        $cipher = "aes-128-cbc";
        $encryptionkey = "abcdefg12345";
        $options = 0;

        $ivlen = openssl_cipher_iv_length($cipher); //is an arbitrary number 
        echo $ivlen . "<br/>"; //16

        $iv = openssl_random_pseudo_bytes($ivlen);  //to get dynamic pseudo
        echo $iv . "<br/>";

        $hash = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);
        // echo "After encrypt = " . $finalencrypt . "<br/>";
        // echo strlen($finalencrypt); //32

        //hash_hmac(a,h,p,h)  hmax=hash method authentication code 
        //hash_hmac(algorithm,hash,pasphrase,binary)
        $hmac = hash_hmac("sha256",$hash,$encryptionkey,true); //true = raw binary number data, false = lowercase husl

        echo $hmac . "<br/>";
        echo strlen($hmac) . "<br/>";  //32

        $finalencrypt = base64_encode($iv.$hmac.$hash);
        echo "After Decrypt = " . $finalencrypt . "<br/>";
        echo strlen($finalencrypt) . "<br/>";

    }

    public function customstrongdecrypt(){

        // openssl_decrypt(p,c,p,o,iv);
        $encrypted = base64_decode("XFg4icGWKkl2fzQLcoZF3kkem7fOwz1E32SZN4udO8Ik5BMgsaLXsK08virc/ucEaHo2OFRsU0pBdnZoOGphY2p1QVRZZz09");
        // echo $encrypted . "<br/>";

        $cipher = "aes-128-cbc";

        $encryptionkey = "abcdefg12345";

        $options = 0;

        $ivlen = openssl_cipher_iv_length($cipher); //is an arbitrary number 
        // echo $ivlen . "<br/>";  //16
            //substr(encrypt,start,end)
        $iv = substr($encrypted,0,$ivlen);
        echo $iv . "<br/>";

        $algolen = 32;
                                    //16 + 32
        $gethash = substr($encrypted,$ivlen+$algolen);
        echo $gethash . "<br/>";
  
        echo strlen($gethash) . "<br/>";  //24


        $finaldecrypt = openssl_decrypt($gethash,$cipher,$encryptionkey,$options,$iv);
        echo "After decrypt = " . $finaldecrypt . "<br/>";


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

$obj -> passwordrehash();
echo "<hr/>";


$obj -> passwordmd5();

echo "<hr/>";
$obj -> sha1();
$obj -> passwordcrypt();

echo "<hr/>";

$obj -> strongpassword();
echo "<hr/>";

$obj -> getciphermethod();

echo "<hr/>";

$obj -> customencrypt();
echo "<hr/>";

$obj -> customdecrypt();
echo "<hr/>";

$obj -> gethashingalgorithm();
echo "<hr/>";

$obj -> customstrongencrypt();
echo "<hr/>";

$obj -> customstrongdecrypt();
echo "<hr/>";

$obj -> gethashingalgorithm();
echo "<hr/>";

$obj -> customstrongencrypt();
echo "<hr/>";

$obj -> customstrongdecrypt();
echo "<hr/>";


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
//25CH 
//25HA

//29SD

?>




