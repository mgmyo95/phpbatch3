<?php 

//? Note :: Abstract can't include body 
//? Note :: Modifier can set in abstract. 
//? A class that extends sub class must extends all of the abstract's methods.
//? Note :: Can contain non-/static properties / common method & constant variable 
//? Note : When we set abstract method !!! class must be abstruct class as well.

abstract class myabstract{

    public $id = 50;   //? non-static properteis 
    public static $notifi = "New Article Created"; //? static properties 
    const TITLE = "This is new article for SPORT";  //? constant variable
    
    //common method 
    public function createpost(){
        echo "I am from create post . Post title is = " . self::TITLE . "<br/>";
    }

    public function readpost(){
        echo "I am from read post . Post id is {$this -> id} <br/>";
    }

    abstract public function updatepost($id,$title);

    public function deletepost($id){
        echo "I am delete post . ID is {$id} <br/>";
    }

}

class articles extends myabstract{

    //? common method (exits body)
    public function updatepost($id,$title){
        echo "I am from pudate post . ID is {$id} . Title is {$title}. <br/>";
    }

}

abstract class info{

    abstract protected function name();
    abstract protected function age();
    abstract protected function professional($sex);
    
    public function getname(){
        return $this -> name();
    }

    public function getage(){
        return $this -> age();
    }

    public function getprofessional($sex){
        return $this -> professional($sex);
    }

}

class boyclass extends info{

    public function name(){
        return "Ko Tha";
    }

    public function age(){
        return 25;
    }

    public function professional($sex){

        switch($sex){
            case "male": 
                $job = "Engineer";
            break;

            case "female": 
                $job = "Doctor";
            break; 

            default: 
                $job = "Developer";
            break;
        }

        return $job;

    }

}

class girlclass extends info{

    protected function name(){
        return "Ms.July";
    }

    protected function age(){
        return 30;
    }

    protected function professional($sex){

        switch($sex){
            case "male": 
                $job = "Engineer";
            break;

            case "female": 
                $job = "Doctor";
            break; 

            default: 
                $job = "Developer";
            break;
        }

        return $job;

    }

}


echo "This is Abstract Method <br/>";

//? ERROR :: We can't instantiate abstract class 
// $obj1 = new myabstract();
// $obj1 -> readpost();

$obj2 = new articles();
echo $obj2 -> id;
echo "<br/>";
echo $obj2::$notifi;
echo "<br/>";
echo $obj2::TITLE;
echo "<hr/>";

$obj2 -> createpost();
$obj2 -> readpost();
$obj2 -> updatepost(20,'This is new post 20');
$obj2 -> deletepost(100);

echo "<hr/>";

$objboy = new boyclass();
$boyname = $objboy -> name();
$boyage = $objboy -> age();
$boypro = $objboy -> professional('male');

echo "{$boyname} is a {$boyage} years old & he is an {$boypro} <br/>";

echo "<hr/>";

$objgirl = new girlclass();
$girlname = $objgirl -> getname();
$girlage = $objgirl -> getage();
$girlpro = $objgirl -> getprofessional('female');

echo "{$girlname} is a {$girlage} years old & he is an {$girlpro} <br/>";

echo "<hr/>";

?> 