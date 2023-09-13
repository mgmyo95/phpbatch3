<?php 

class mymagic{

    public $num;
    private $name;
    protected $age;

    public function __construct($val){
        //!property_exists(classname string,propertyname string);

        //  if(property_exists('mymagic','num')){
        //      echo $this -> num = $val;
        //  }else{
        //      echo "Property doesn't exists";
        //  }

        //  if(property_exists($this,'num')){
        //      echo $this -> num = $val;
        //  }else{
        //      echo "Property doesn't exists";
        //  }

        // if(property_exists($this,'name')){
        //     echo $this -> num = $val;
        //}else{
        //     echo "Property doesn't exists";
        // }

        if(property_exists($this,'age')){
            echo $this -> num = $val;
        }else{
            echo "Property doesn't exists";
        }

    }

}

class mymagicone{
    //! properties
    //! magic method (ma shi dae properties call yin working)
    public function __get($var){
        echo "You not yet defined these \"{$var}\" properties <br/>";
    }

    //! __set(variable,value)
    public function __set($var,$val){
        echo "You not yet defined these \"{$var}\" properties so your value = \"${val}\" <br/>";
    }

}

class mymagictwo{
    //method 
    //For Non-static Method 
    //__call(two argument)
    public function __call($method,$vals){
        // echo "You not yet defined these \"{$method}\" Method so your value = \"${$vals}\" is here <br/>";

        echo "You not yet defined these \"{$method}\" Method so your value = "."<pre>".print_r($vals,true)."</pre>"."is here <br/>";

    }

    //For static Method
    public static function __callstatic($method,$vals){
        // echo "You not yet defined these \"{$method}\" Method so your value = \"${$vals}\" is here <br/>";

        echo "You not yet defined these \"{$method}\" static Method so your value = "."<pre>".print_r($vals,true)."</pre>"."is here <br/>";

    }

}

class mymagicthree{
    //! class object invoke
    //! class object ko method lo invoke loke yin
    public function __invoke(){
        echo "Hello sir I am working cuz you trying to print out your class object as method. <br/>";
    }

}

class mymagicfour{

    // public function __toString(){
    //     echo "Hello sir, I am working cuz you trying to print out your class object. <br/>";
    // }

}

class mymagicfive{
    //! serialize
    public $data;
    public function __construct(){
        $this -> data = [1,2,3,4,5];
    }   

    //do serialize auto making
    public function __sleep(){
        echo "Hello sir, I am working cuz you trying to serialize. <br/>";
    }

}

class mymagicsix{
    //unsealize
    public $data;
    public function __construct(){
        $this -> data = [1,2,3,4,5];
    }

    //do unserialize auto making
    public function __wakeup(){
        echo "Hello sir, I am working cuz you trying to unserialize. <br/>";
    }

}

echo "This is Magic Method <br/>";
$obj = new mymagic(100);
echo "<br/>";
$obj = new mymagicone();
$obj -> greeting;
$obj -> bye = "Thank You";
echo "<hr/>";

$obj2 = new mymagictwo();
$obj2 -> greeting();
$obj2 -> greeting('morning','afternoon','evening');
echo "<br/>";

$obj2::bye();
mymagictwo::bye('Thank You');
mymagictwo::bye('Thank You','Regards');

echo "<hr/>";

$obj3 = new mymagicthree();
$obj3();


echo "<hr/>";

// $obj4 = new mymagicfour();
// echo $obj4;
echo "<hr/>";

// $obj5 = new mymagicfive();
// serialize($obj5);

echo "<hr/>";

$obj6 = new mymagicsix();
$sridata = serialize($obj6);
unserialize($sridata);
echo "<br/>";
?>