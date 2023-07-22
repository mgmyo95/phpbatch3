<?php 

trait sitelogin{
    public $fullname = "Honey Nway Oo <br/>";
    public $email = "honey@gmail.com <br/>";
    public $password = "123456 <br/>";

    public function useraccess(){
        echo "This is site login . Email is {$this -> email} & Password is {$this -> password} <br/>";
    }

    public function userinfo(){
        echo "Profile name is {$this -> fullname} <br/>";
    }

}

trait devlogin{

    public function githublogin(){
        echo "This is github login . Email is {$this -> email} & Password is {$this -> password} <br/>";
    }

}

class googlelogin{

    //Method 3 
    //use sitelogn,devlogin

    public function gmaillogin(){
        echo "This is Gmail login . Email is {$this -> email} & Password is {$this -> password} <br/>";
    }
}

trait maintrait{
    //Method 4
    use sitelogin,devlogin;
}

class mytrait extends googlelogin{
    //use = keyword 
    // //Method 1
    // use sitelogin;
    // use devlogin;

    //Method 2
    // use sitelogin,devlogin; 

    //Method 4 
    use maintrait;

}

echo "This is Trait <br/>";

$obj = new mytrait();
// echo $obj -> fullname . $obj -> email . $obj -> password;
echo "<br/>";

$obj -> useraccess();
$obj -> userinfo();

$obj -> githublogin();
$obj -> gmaillogin();


echo "<hr/>";



?>

<!-- 21TR -->
