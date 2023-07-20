<?php 

//Super class or Main Class
class myinheritance{
   
    protected $fullname = "Nandar";
    public $city = "Mandalay";
    public $email = "nanda@gmail.com";
    public $password = "123456";

    public function getaccess(){
        echo "This is site : email is {$this -> email} & password is {$this -> password} <br/>";
    }

    public function getinfo(){
        echo "Name is {$this -> fullname} & City is {$this -> city} <br/>";
    }

}

//=>extends ka inherit do 
//Sub Class or Child Class
class devlogin extends myinheritance{
    public function githublogin(){
        echo "This is github login : email is {$this -> email} . profile name {$this -> fullname}";
    }
}

class sociallogin extends myinheritance{

    //Own Method 
    public function gmaillogin(){
        echo "This is gmail login : email is {$this -> email} . Profile name is {$this -> fullname} <br/>";
    }

    //Own Method 
    public function facebooklogin(){
        echo "This is facebook login : email is {$this -> email} . Profile name is {$this -> fullname} <br/>";
    }

    //Method overwrite 
    public function getinfo(){

        //Properties Overwrite 
        $this -> fullname = "Hsu Lae";
        $this -> city = "Bago";

        echo "Name is {$this -> fullname} & City is {$this -> city} <br/>";
    }

}



echo "This is Inheritance . <br/>";
$obj = new myinheritance();
$obj -> getaccess();
$obj -> getinfo();

echo "<hr/>";

echo "This is Inheritance. <br/>"; 

$dev = new devlogin();
$dev -> githublogin();
echo "<br/>";
$dev -> getaccess();
echo "<br/>";
$dev -> getinfo();
echo "<br/>";

echo "This is Inheritance. <br/>"; 

$soc = new sociallogin();
$soc -> gmaillogin();
echo "<br/>";
$soc -> facebooklogin();
echo "<br/>";
$soc -> getinfo();
echo "<br/>";


?>