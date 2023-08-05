<?php 

//Note : Interface can't include body 
//just rule 
//Modifier must be public in interface , cuz we need to overwrite 
//A class must use the implements keyword.

interface post{
     //interface make format 
    public function setid($id);
    public function create();
    public function read($id);
    public function update($id,$title);
    public function delete();
}

class myinterfaceproperties implements post{

    private $id;
    private $title;

    function setid($id){
       $this -> id = $id;
    }

    function create(){
        echo "I am create article. <br/>";
    }

    function read($id){
        $this -> id = $id;
        echo "I am read article. ID is {$this -> id} <br/>";
    }

    function update($id,$title){
        $this -> id = $id;
        $this -> title = $title;
        echo "I am update article. ID is {$this -> id} and title is {$this -> title} <br/>";
    }


    function delete(){
        echo "I am delete article. {$this -> id} <br/>";
    }




}

echo "This is Interface with Properties <br/>";

$obj = new myinterfaceproperties();
$obj -> setid(50);
$obj -> create();
$obj -> read(30);
$obj -> update(20,"This is new post 20");
$obj -> delete();

echo "<hr/>";

//25ST

?>