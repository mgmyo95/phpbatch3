<?php 

trait sitelogin{

    public $fullname = "Aung Aung Kyaw <br/>";
    public $email = "aung@gmail.com <br/>";
    public $password = "123456 <br/>";

    //Member function 
    public function useraccess(){
        echo "This is site login {$this -> email} & password is {$this -> password}";
    }

    public function userinfo(){
        echo "Name is {$this -> fullname}";
    }

}

trait devlogin{
    public function githublogin(){
        echo "This is github login {$this -> email} & password is {$this -> password}";
    }
}

class googlelogin{
    public function gmaillogin(){
        echo "This is gmail login {$this -> email} & password is {$this -> password}";
    }
}

trait maintrait{
    use sitelogin,devlogin;
}



class exercise extends googlelogin{
    use maintrait;
}

echo "This is Trait <br/>";

$obj = new exercise();
$obj -> useraccess();
$obj -> userinfo();

echo "<hr/>";
$obj -> gmaillogin();
$obj -> githublogin();


?>