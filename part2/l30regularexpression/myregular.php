<?php 


class myregular{

    public function __construct(){
        $string = "We are family";
        // echo $string;

        //* preg_match(delimiter,string)
        // $result = preg_match("We are family",$string); //? it is false
        // $result = preg_match("/We are family/",$string);  //? it is true   
        // $result = preg_match("/family/",$string);  //? It is true
        // $result = preg_match("/mily/",$string);         //? It is true
        // $result = preg_match("/are/",$string);  //? It is true

        //* $ must be in end(case sensitive)
        // $result = preg_match("/mily$/",$string); //? it is true
        // $result = preg_match("/are$/",$string); //? it is false 
        // $result = preg_match("/we$/",$string); //? it is false 
        // $result = preg_match("/family$/",$string); //?  it is true
        // $result = preg_match("/Family$/",$string); //?  it is false

        //* ^ caret or circumflex , must be in start (cs)
        // $result = preg_match("/^mily/",$string);  //? it's false 
        // $result = preg_match("/%^are/",$string);  //? it's false 
        // $result = preg_match("/#^we#/",$string);  //? it's false 
        // $result = preg_match("/^We/",$string); //? It's true
        // $result = preg_match("-^family$-",$string); //? it's false note:: string must be exact

        // $result = preg_match("!^$!",$string); //?  it's false Note:: string must be empty
        // $result = preg_match("/^we/i",$string); //? it's true Note:: i no case sensitive

        //* [] range a-z A-Z 0-9
        // $result = preg_match("/[b-d]/",$string); //? it's false 
        // $result = preg_match("/[a-f]/",$string); //? it's true
        // $result = preg_match("/[a-z]/",$string); //? it's true
        // $result = preg_match("/[a-f]/",$string); //? it's true
        // $result = preg_match("/[A-Z]/",$string); //? it's true
        // $result = preg_match("/[0-4]/",$string); //? it's false

        $string = "my lucky number is 567";

        // $result = preg_match("/[0-4]/",$string); //? it's false
        // $result = preg_match("/[5-9]/",$string); //? it's true
        // $result = preg_match("/[a-z]/",$string); //? it's true
        // $result = preg_match("/[A-Z]/",$string); //? it's false
        // $result = preg_match("/[A-Z]|[a-z]/",$string); //? it's true
        // $result = preg_match("/^[a-z]/",$string); //? it's true
        // $result = preg_match("/[a-z]$/",$string); //? it's false
        // $result = preg_match("/^[5-9]/",$string); //? it's false
        // $result = preg_match("/[5-9]$/",$string); //? it's true

        // $result = preg_match("/[^a-z]/",$string); //? it's true  Note :: (it's mean not include a to z , result is true cuz string included spacing and number)
        // $result = preg_match("/[^5-9]/",$string); //? it's true  Note :: (it's mean not include 5 to 9 , result is true cuz string included spacing and string)
        // $result = preg_match("/[^0-4]/",$string); //? it's true  Note :: (it's mean not include 0 to 4 , result is true cuz string included spacing and string and)


        // $result = preg_match("/@/",$string); //? it's false  

        $string = "admin@gmail.com";
        // $result = preg_match("/@/",$string); //? it's true  

        //* m+ must contain m and more
        // $result = preg_match("/m/",$string); //? it's true  
        // $result = preg_match("/m+/",$string); //? it's true  
        // $result = preg_match("/b/",$string); //? it's false
        // $result = preg_match("/b+/",$string); //? it's false 

        //* b* contain b or not and more
        // $result = preg_match("/b*/",$string); //? it's true  

        //* b? contain b or not and more
        // $result = preg_match("/b?/",$string); //? it's true  
        
        //? m(nth) contain same place m as per nth and more
        $result = preg_match("/m{1}/",$string); //? it's true  
        $result = preg_match("/m{2}/",$string); //? it's false  

        $string = "admmin@gmail.com";
        $result = preg_match("/m{1}/",$string); //? it's true  
        $result = preg_match("/m{2}/",$string); //? it's true  

        //? m(nth,nth) contain same place m as per nth and more
        // $result = preg_match("/m{3}/",$string); //? it's false  
        // $result = preg_match("/m{2,3}/",$string); //? it's true  

        //? m(nth,) contain same place m as per nth and more
        $result = preg_match("/m{2,}/",$string); //? it's true  


        echo $result ? "It is true" : "It is false";    
    }

}

echo "This is regular expression <br/>";
$obj = new myregular();
echo "<hr/>";


?>

//? preg_match(delimiter,string)
//? $ must be in end(case sensitive)
//? ^ caret or circumflex , must be in start (cs)
//? [] range a-z A-Z 0-9
//? m+ must contain m and more
//? b* contain b or not and more
//? b? contain b or not and more
//? m(nth) contain same place m as per nth and more
//? m(nth,nth) contain same place m as per nth and more
//? m(nth,) contain same place m as per nth and more