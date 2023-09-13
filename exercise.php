<?php 

class myclone{

    public function project($name){
        echo "I created a new {$name} project . <br/>";
    }

    public function task(){
        echo "I am new task <br/>";
    }

    public function __call($method,$val){
        echo "You not yet defined these \"{$method}\" Method so your value = "."<pre>".print_r($vals,true)."</pre>"."is here <br/>"; 
    }

    public static function exam(){
        echo "I am new exam <br/>";
    }

    public static function __callstatic($method,$val){
        echo "You not yet defined these \"{$method}\" Static Method so your value = "."<pre>".print_r($vals,true)."</pre>"."is here <br/>"; 
    }

}

echo "This is magic constant <br/>";
$obj = new myclone();
$obj -> project('POS');
$obj2 = clone $obj;
$obj2 -> project('E-wallet');
echo "<hr/>";

//! method_exists(classname string,methodname string)

if(method_exists("myclone",'project')){
    $obj -> task();
}else{
    $obj -> tasks();
}

if(method_exists(new myclone,'exam')){
    $obj -> exam();
}else{
    $obj -> exams();
}



?>