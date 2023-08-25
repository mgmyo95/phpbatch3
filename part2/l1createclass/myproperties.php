<?php 
// echo "hay";

//Define Class Object 

// class classname{
//     properties 
//     method 
// }

// new classname();  //invoke class


class myproperties{
    //properties 
    var $firstname = "Data Land ";      //var = keyword
    var $lastname = "Technology";
    
}

$obj = new myproperties();
echo "This is Class Object <br/>";

echo $obj -> firstname . $obj->lastname;    //properties call don't use $



?>