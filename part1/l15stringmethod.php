<?php 

// strlen(string)
//str_word_count(string,return)  //change to array
//ucwords(string,delimeters)  //capitalize
//ucfirst(string);  //first word uppercase
//lcfirst(string);  //first word lowercase
//strtoupper(string)  //change uppercase 
//strtolower(string)  //change lowercase 
//chunk_split(string,length,end)   
//substr(string,start,length)  //where to start and where to end
//str_replace(find,replace,string)
//substr_replace(string,replacement,start,length)
//trim(string,charlist)  //delete space 
//str_repeat(string,count)  //word copy 
//explode(separator,string,limit)  //change string to array
//implode(separator,array)  //change array to string
//join(separator,array)  //change array to string 
//number_format(number,decimals)


// strlen()Function 
// strlen(string)

$words = "Save Myanmar";
echo strlen($words);  //12
echo "<hr/>";

//str_word_count() Function 
//str_word_count(string,return)

//0 - Default(string)
//1 - Return an array 
//2 - Return an array

$words = "Save Myanmar Country";
echo str_word_count($words);  //3
echo "<br/>";
echo str_word_count($words,0);  //3
echo "<br/>";
echo "<pre>".print_r(str_word_count($words,1),true)."</pre>";  //[0] => Save[1] => Myanmar[2] => Country
echo "<br/>";
echo "<pre>".print_r(str_word_count($words,2),true)."</pre>";  // [0] => Save [5] => Myanmar [13] => Country
echo "<br/>";
echo "<hr/>";

//ucwords()Function 
//ucwords(string,delimeters) //capitalize
$words = "myanmar country";
echo ucwords($words);   //capitalize
echo "<br/>";

$words = "welcome to my,country";
echo ucwords($words,",");  //, nt near capitalize Welcome to my,Country
echo "<br/>";


//ucfirst() Function 
//ucfirst(string);
$words = "welcome to my country";  //Welcome to my country
echo ucfirst($words);
echo "<br/>";

//lcfirst()Function 
//lcfirst(string);
$words = "Myanmar Country";  //myanmar Country
echo lcfirst($words);
echo "<br/>";

$words = "Welcome To My Country"; //welcome To My Country
echo lcfirst($words);
echo "<br/>";

// strtoupper()Function 
//strtoupper(string)  //change uppercase 
$words = "welcome to my country"; //WELCOME TO MY COUNTRY
echo strtoupper($words);
echo "<br/>";

// strtolower()Function 
//strtolower(string)  //change lowercase 
$words = "WELCOME To My Country"; //WELCOME TO MY COUNTRY
echo strtolower($words);
echo "<hr/>";

//chunk_split() Function 
//chunk_split(string,length,end)

$words = "Myanmar Country";
echo chunk_split($words,1,".");  //M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo "<br/>";
echo chunk_split($words,3,"-");  //M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo "<hr/>";

//substr()Function 
//substr(string,start,length)

$words = "Welcome Myanmar";
echo substr($words,0);  //Welcome Myanmar
echo "<br/>";
echo substr($words,8);  //Myanmar 
echo "<br/>";
echo substr($words,0,7);  //Welcome 
echo "<br/>";
echo substr($words,0,9);  //Welcome M    
echo "<hr/>";

//str_replace() Function 
//str_replace(find,replace,string)
echo str_replace("Myanmar","CRPH","Save Myanmar");
echo "<br/>";

//substr_replace()Function 
//substr_replace(string,replacement,start,length)
$words = "Welcome Myanmar";
echo substr_replace($words,"Hello",0); //Hello
echo "<br/>";
echo substr_replace($words,"Thailand",8); //Welcome Thailand
echo "<br/>";

echo substr_replace($words,"Hello",0,0); //HelloWelcome Myanmar
echo "<br/>";

echo substr_replace($words,"Hello",0,7); //Hello Myanmar
echo "<br/>";

//trim() Function 
//trim(string,charlist)  //delete space 

$words = "Welcome to  my Country ";  
echo trim($words,"Wel"); //come to my Country
echo "<br/>";
echo trim($words,"try"); //welcome to my coun
echo "<hr/>";

//str_repeat()Function 
//str_repeat(string,count)  //word copy 
echo str_repeat("A Kyal Gyi",3);  //A Kyal GyiA Kyal GyiA Kyal Gyi
echo "<hr/>";

//explode() Function 
//explode(separator,string,limit)  //change string to array
$words = "Welcome to My Country";
echo "<pre>".print_r(explode(" ",$words),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>";
echo "<hr/>";

//implode() Function 
//implode(separator,array)  //change array to string
$words = ["Welcome", "to","My","Country"];
echo "<pre>".print_r(implode(" ",$words),true)."</pre>"; //Welcome to My Country

echo "<pre>".print_r(implode("-",$words),true)."</pre>"; //Welcome-to-My-Country
echo "<hr/>";

//join() Function = implode() Function
//join(separator,array)  //change array to string 
$words = ["Welcome", "to","My","Country"];
echo "<pre>".print_r(join(" ",$words),true)."</pre>"; //Welcome to My Country

echo "<pre>".print_r(join("-",$words),true)."</pre>"; //Welcome-to-My-Country
echo "<hr/>";

//number_format() Function 
//number_format(number,decimals)
echo number_format("1000000")."<br/>";  //1,000,000
echo number_format("1000000",2)."<br/>"; //1,000,000.00





//31SM




?>