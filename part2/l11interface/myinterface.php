<?php 

//Note : Interface can't include body 
//just rule 
//Modifier must be public in interface , cuz we need to overwrite 
//A class must use the implements keyword.
//? Note :: Can't contain properties but constant variable can.

interface article{
     //interface make format 
     const CAPTION = "This is new article for SPORT";
    public function create();
    public function read($id);
    public function update($id,$title);
    public function delete();
}

class myinterface implements article{

    public function setid(){
        echo "I am setid <br/>";
    }

    public function create(){
        echo "I am create article. <br/>";
    }

    public function read($id){
        echo "I am read article. ID is{$id} <br/>";
    }

    public function update($id,$title){
        echo "I am update article. ID is {$id} and Title is {$title} <br/>";
    }

    public function delete(){
        echo "I am delete article. ID is <br/>";
    }


}

echo "This is Interface <br/>";

$obj = new myinterface();
$obj -> setid();
$obj -> create();
$obj-> read(10);
$obj-> update(10,"This is new article 10");
$obj -> delete();

echo "<hr/>";

//25ST

?>