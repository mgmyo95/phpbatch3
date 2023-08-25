<?php 

class constantvsproperties{

    //self keyword and private can't overwrite in inheritance class 
    //static keyword can overwirte in inheritance class
    //constant variable 
    const ARTICLE = "This is new article for SPORT.";
    const TOPIC = "This is new topic for SPORT";
    public $post = "This is new post for SPORT.";  //*** public and protected can overwrite // private can't overwrite 

    // protected $post = "This is new post for SPORT.";  //baby > contentone result political 
    // private $post = "This is new post for SPORT.";   //baby > contentone result sport 

    public function contentone(){
        echo self::ARTICLE;
        echo "<br/>";
        echo static::TOPIC;
        echo "<br/>";

        echo $this -> post;
        echo "<br/>";

    }

}

class baby extends constantvsproperties{
    const ARTICLE = "This is new article for POLITICAL.";
    const TOPIC = "This is new topic for POLITICAL";
    public $post = "This is new post for POLITICAL.";

    public function contenttwo(){
        echo self::ARTICLE;
        echo "<br/>";

        echo static::TOPIC;
        echo "<br/>";

        echo $this -> post;
        echo "<br/>";

    }
}


echo "This is Constant vs Properties. <br/>";

$obj = new constantvsproperties();
$obj -> contentone();
// This is new article for SPORT.
// This is new topic for SPORT
// This is new post for SPORT.
echo "<br/>";

$bb = new baby();
$bb -> contentone();
// This is new article for SPORT.
// This is new topic for POLITICAL
// This is new post for POLITICAL.
echo "<br/>";

$bb -> contenttwo();
// This is new article for POLITICAL.
// This is new topic for POLITICAL
// This is new post for POLITICAL.
echo "<br/>";


echo "<hr/>";




?>
