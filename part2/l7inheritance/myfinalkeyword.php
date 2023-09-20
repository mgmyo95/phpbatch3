<?php 
//? Note:: final : keyword is used to restrice method and class not to be share with child class
//! final class myfinalkeyword
class myfinalkeyword{

    public $fullname = "Nanda";
    public $email = "nanda@gmail.com";
    public $city = "Mandalay";
    public $password = "123456";

    public function getaccess(){
        echo "This is github login {$this -> email} and password {$this -> password} <br/>";
    }

    //!final don't do overwrite  
    //? final = keyword
    final public function getinfo(){
        echo "Name is {$this -> fullname} and city  is{$this -> city} <br/>";
    }

}

class developerlogin extends myfinalkeyword{
    public function githublogin(){
        echo "This is github login {$this -> email} and profile name is {$this -> fullname} <br/>";
    }

    // public function getinfo(){
    //     echo "Name is {$this -> fullname} and city  is{$this -> city} <br/>";
    // }
}

echo "This is final keyword <br/>";
$obj = new myfinalkeyword();
$obj -> getaccess();
$obj -> getinfo();
echo "<hr/>";

$obj2 = new developerlogin();
$obj2 -> githublogin();
$obj2 -> getinfo();


?>