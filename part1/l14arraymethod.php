<?php 

//array_chunk();
//array_chunk(array,size,preserve_key);

// array_chunk(array,size,presrvekey);
// array_combine(key,value);  
// array_count_values(array);   //index array change to associative array
// count(array);
// array_diff(arr,arr1,arr3,...);
// array_diff_assoc(arr1,arr2,arr3,...)
// array_diff_key(arr1,arr2,arr3,...);
// array_intersect(arr1,arr2,arr3,...);
// array_fill(index,number,value);
// array_fill_keys(key,value);
// array_filter(array,callbackfunction,flag);  //odd
// array_key_exists(key,array);
//array_keys(array,value,strict);
//array_map(callbackfunction,array1,array2,array3,...);
//array_merge(array1,array2,array3,...);
//array_multisort(array);
//sort(array);
//array_pad(array,size,value);
//array_pop(array);
//array_reduce(array,callbackfunction,initial);
//array_reverse(array);
//array_search(value,array,strict);
//array_pop(array); //delete by back
//array_shift(array); //delete by front
//array_unshift(array,value1,value2,value2); //put by front
//array_push(array,value1,value2,value3,...); //put by back
//array_slice(array,start,length,preserve);
//array_splice(array,start,length,array2)
//array_sum(array);
//array_unique(array);
//array_values(array);  //associative array changed index array
//array_walk(array,callbackfunction,paremeter);
//compact(var1,var2,var3);
//current() / pos() / end() / prev() / next() / reset();
//range(low,height);
//sizeof(array);


$couples = ["aung aung","su su","nu nu","kyaw kyaw","mya mya","tun tun","maung maung","yin yin"];

echo"<pre>".print_r(array_chunk($couples,2),true)."</pre>";
// echo array_chunk($couples,2)[0][0]; //aung aung

echo"<pre>".print_r(array_chunk($couples,2,true),true)."</pre>";//0 1 2 3 4 5 6
echo"<pre>".print_r(array_chunk($couples,2,false),true)."</pre>";  //default 01 01 01 01

echo "<hr/>";
//------------------------------------

// array_combine() Function
// array_combine(key,value) Function
$name = array("aung aung","su su","maung maung","hla hla");
$age = ["30","25","35","40"];

echo "<pre>".print_r(array_combine($name,$age),true)."</pre>";
//output associative array
echo"<hr/>";

//------------------------------------

//array_count_values() Function 
//array_count_values(array);

$car = ["toyota","suzuki","force","mazada","force","force"];
echo "<pre>".print_r(array_count_values($car),true)."</pre>";
echo "<br/>";


//------------------------------------

//count()Function
//count(array);
$cars = ["toyota","suzuki","force","mazada","force","force"];
echo "<pre>".print_r(count($cars),true)."</pre>";

echo "<hr/>";

//------------------------------------

//array_diff()Function 
//array_diff(array1,array2,array3,....);
//NOte:we don't need to consider any index or keyname

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre";//green
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre";//silver
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>";//no


$col1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("e"=>"red","f"=>"green","g"=>"black");

echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>";//blue,yellow
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>";//black
//------------------------------------

//array_diff_assoc()Function
//array_diff_assoc(array1,array2,array3,....);

$col1 = array("a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green");
$col2 = array("a"=>"red","b"=>"green","c"=>"blue");

echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>";//yellow green
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>";//green
echo "<hr/>";
//------------------------------------

//array_diff_key()Function 
//array_diff_key(array1,array2,array3,....);

$col1 = array("a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink");
$col2 = array("a"=>"red","b"=>"green","c"=>"blue","e"=>"orange");

echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>";//green pink
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>";//orange

echo "<hr/>";
//------------------------------------

//array_intersect()Function
//array_intersect(array1,array2,array3,.....);

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,90,80);

echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>";//10 20 30 80
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>";//10 20 30 80

$col1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("a"=>"red","b"=>"green","d"=>"orange");

echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>";//red green
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>";//red green


echo "<hr/>";
//------------------------------------

//array_fill()Function 
//array_fill(index,number,value);

echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>";//
echo "<pre>".print_r(array_fill(2,5,"blue"),true)."</pre>";//
echo "<hr/>";

//------------------------------------

//array_fill_keys()Function 
//array_fill_keys(keys,value);

$keys = array("a","b","c","d");
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>";//a pink b pink c pink d pink

echo "<hr/>";
//------------------------------------

// array.filter()Function
// array_filter(array,callbackfunction,flag);

$num = [1,2,3,4,3];

function getodd($var){
    return($var & 1);
}

echo "<pre>".print_r(array_filter($num,"getodd"),true)."</pre>";
echo "<hr/>";

//------------------------------------

//array_key_exists()Function 
//array_key_exists(key,array);

$phones = ["mpt"=>"ftth","ooredoo"=>"broachban"];

if(array_key_exists("mpt",$phones)){
    echo "key exists";
}else{
    echo "key doest not exists";
}

echo "<hr/>";
//------------------------------------


//array_keys()Function    true
//array_keys(array,value,strict)
$phones = ["mpt"=>"ftth","ooredoo"=>"broachban","ais"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),true)."</pre>";
echo array_keys($phones)[0]; //mpt

echo "<pre>".print_r(array_keys($phones,"broachban"),true)."</pre>";

echo array_keys($phones,"broachban")[0]; //ooredoo


$numbers = [10,20,30,"10"];

echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>"; //[0] => 3

echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>";// [0] => 0

echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>"; //[0] => 0
// [1] => 3
echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>";//[0] => 0
// [1] => 3



echo "<hr/>";

//------------------------------------


// arrray_map()Function 
//array_map(callbackfunction,array1,array2,array3,...);

$males = ["Tun Tun","Zaw Zaw","Aung Aung","Kyaw Kyaw","Thura"];
$females = array("Hla Hla","Mya Mya","Su Su","Nu Nu","Yu Yu");

function genderone($name){
    return("Mr.".$name);
};

function gendertwo($male,$female){
    return($male." & ".$female);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>";
echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>";
echo "<hr/>";
//------------------------------------

//array_merge()Function 
//array_merge(array1,array2,array3,...);


$arr1 = ["red","green"];
$arr2 = ["blue","yellow"];
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>";
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>";
echo "<hr/>";
//------------------------------------

//array_multisort()Function 
//array_multisort(array);

$animals = ["Dog","Cat","Mouse","Lion","Zebra","Rat","Bear","Cow"];

array_multisort($animals);
echo "<pre>".print_r($animals,true)."</pre>";  //a to z 

$numbers = array(10,50,80,90,35,100,130,250,70);
array_multisort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>"; 

$numbers = array(10,50,"80",90,35,100,130,"250",70);
array_multisort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>"; 


echo "<hr/>";
//------------------------------------

// sort()Function
//sort(array)

$cars = ["volvo","bmw","toyota","mazda","suzuki"];
sort($cars);

echo "<pre>".print_r($cars,true)."</pre>"; 

$numbers = array(10,50,80,90,35,100,130,250,70);
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>"; 

echo "<hr/>";
//------------------------------------


//array_pad()Function 
//array_pad(array,size,value)

$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";

echo "<hr/>";
//------------------------------------

//array_pop()Function 
//array_pop(array)

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,true)."</pre>"; //red green

echo "<hr/>";
//------------------------------------


// array_reduce()Function 
//array_reduce(array,callbackfunction,initial);

$num = [10,"20",30];

function calfun($total,$val){
    return $total += $val;
};

echo "<pre>".print_r(array_reduce($num,"calfun",0),true)."</pre>";
echo "<hr/>";
//------------------------------------

//array_reverse()Function
//array_reverse(array)

$arr = ["a","b","c","d","e"];

echo "<pre>".print_r(array_reverse($arr),true)."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
echo "<pre>".print_r(array_reverse($arr),true)."</pre>";

echo "<hr/>";
//------------------------------------

//array_search()Function 
//array_search(value,array,strict);

$arr = ["a","b","c","d","e"];

echo "<pre>".print_r(array_search("d",$arr),true)."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
echo "<pre>".print_r(array_search("green",$arr),true)."</pre>";

echo "<hr/>";
//------------------------------------

//array_shift()Functio 
//array_shift(array);
$colors = array("red","green","blue");
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_shift($arr);
echo "<pre>".print_r($arr,true)."</pre>";

echo "<hr/>";
//------------------------------------

//array_unshift()Function 
//array_unshift(array,value1,value2,value2)

$colors = array("red","green","blue");
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"violet","3"=>"blue"];
array_unshift($colors,"silver");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"blue"];
array_unshift($colors,"silver");
echo "<pre>".print_r($colors,true)."</pre>";

echo "<hr/>";
//------------------------------------


//array_push()Function 
//array_push(array,value1,value2,value3,...);

$colors = array("red","green","blue");
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"violet","3"=>"blue"];
array_push($colors,"silver");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"blue"];
array_push($colors,"silver","orange");
echo "<pre>".print_r($colors,true)."</pre>";

echo "<hr/>";
//------------------------------------

//array_slice()Function             true/false
//array_slice(array,start,length,preserve);
                //0     1      2       3        4
$colors = array("red","green","blue","yellow","black");

echo "<pre>".print_r(array_slice($colors,0),true)."</pre>"; //red to black
echo "<pre>".print_r(array_slice($colors,2),true)."</pre>"; //blue to black

echo "<pre>".print_r(array_slice($colors,-1),true)."</pre>"; //black
echo "<pre>".print_r(array_slice($colors,-2),true)."</pre>"; //yellow black
echo "<pre>".print_r(array_slice($colors,-5),true)."</pre>"; //red to black

echo "<pre>".print_r(array_slice($colors,0,2),true)."</pre>"; //red green
echo "<pre>".print_r(array_slice($colors,2,2),true)."</pre>"; //blue yellow
echo "<pre>".print_r(array_slice($colors,2,5),true)."</pre>"; //blue yellow black nothing

echo "<pre>".print_r(array_slice($colors,2,5,true),true)."</pre>"; //blue yellow black nothing
echo "<pre>".print_r(array_slice($colors,2,5,false),true)."</pre>"; //blue yellow black nothing
//default false;

echo "<hr/>";
//------------------------------------

//array_splice()Function 
                     //idx  
//array_splice(array,start,length,array2)
$colors = array("red","green","blue","yellow","black");

// echo "<pre>".print_r(array_splice($colors,2),true)."</pre>"; //blue to black

// echo "<pre>".print_r(array_splice($colors,2,1),true)."</pre>";//blue 
// echo "<pre>".print_r(array_splice($colors,2,3),true)."</pre>";//blue to black

// echo "<pre>".print_r(array_splice($colors,2,-1),true)."</pre>";//blue yellow

// echo "<pre>".print_r(array_splice($colors,0,-3),true)."</pre>";  //red

$males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","maung maung"];
$females = ["su su","yu yu","nu nu"];

//cut it off

// array_splice($males,0,2,$females);
// echo "<pre>".print_r($males,true)."</pre>";

// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,true)."</pre>";

array_splice($males,1,3,$females);
echo "<pre>".print_r($males,true)."</pre>"; //aung aung su su yu yu nunu mg mg
echo "<hr/>";
//------------------------------------

//array_sum()Function 
//array_sum(array)

$nums = [10,20,30,40,50]; //150 

echo "<pre>".print_r(array_sum($nums),true)."</pre>";  //150

$nums = [10,20,30,"40",-50]; //150 

echo "<pre>".print_r(array_sum($nums),true)."</pre>";  //50

$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3]; //150 

echo "<pre>".print_r(array_sum($nums),true)."</pre>";  
echo "<hr/>";

//------------------------------------

//array_unque()Function
//array_unique(array)

$num = [10,20,30,50,10,20,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>";   //10,20,30,50,60,70,80

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
echo "<pre>".print_r(array_unique($colors),true)."</pre>";  

echo "<hr/>";
//------------------------------------

//array_values()Function 
//array_values(array)   assoc array switch index array
$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
echo "<pre>".print_r(array_values($colors),true)."</pre>";  

//------------------------------------

//array_walk()Function 
//array_walk(array,callbackfunction,parameter)
$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
function myfun1($val,$key){
    echo "key is = $key and value is $val <br/>";  //string
}
array_walk($colors,"myfun1");
echo "<br/>";

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
function myfun2($val,$key,$p){
    echo "key is = $key and value is $val $p <br/>";  //string
}
array_walk($colors,"myfun2","color");

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
function myfun3(&$val){
    $val = "black";
}
array_walk($colors,"myfun3");
echo "<pre>".print_r($colors,true)."</pre>";  //black black black black


echo "<hr/>";
//------------------------------------

//compact() Function
//compact(var1,var2,var3,...);

$name = "aung aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,"true")."</pre>";  //assoc array


echo "<hr/>";
//------------------------------------

//current() / pos() / end() / next() / prev() /reset()

$students = array("aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw");
// echo "<pre>".print_r(current($students),"true")."</pre>";  front aung aung by string
// echo "<pre>".print_r(pos($students),"true")."</pre>";  front aung aung by string

// echo "<pre>".print_r(end($students),"true")."</pre>"; //back kyaw kyaw by string
// echo "<pre>".print_r(next($students),"true")."</pre>"; //second maung maung by string

echo "<pre>".print_r(next($students),"true")."</pre>"; // maung maung by string
// echo "<pre>".print_r(prev($students),"true")."</pre>"; // aung aung  by string
echo "<pre>".print_r(next($students),"true")."</pre>"; // zaw zaw by string
echo "<pre>".print_r(reset($students),"true")."</pre>"; // front aung aung by string

echo "<hr/>";

//range(low,height,)


$num2 = range(0,9);
echo "<pre>".print_r($num2,"true")."</pre>";

$char = range("a","k");
echo "<pre>".print_r($char,"true")."</pre>"; //a to ky by

$char = range("k","g"); 
echo "<pre>".print_r($char,"true")."</pre>"; //k to b by array

///sizeof()Function 
//sizeof(array)

$colors = ["red","green","blue","pink"];
echo "<pre>".print_r(sizeof($colors),"true")."</pre>";  //4 by string(int)
echo var_dump(sizeof($colors)); //int

echo "<hr/>";

//=>serialize() vs unserialize()
$staffs = [
    ['aung aung','maung maung','kyaw kyaw','tun tun','thura'],
    ['su su','yu yu','nu nu','aye aye','hla hla']
];

echo "<pre>".print_r($staffs,true)."</pre>";

$seridatas = serialize($staffs);
echo $seridatas;  //change string
echo "<br/>";

// var_dump($seridatas);

$unseridatas = unserialize($seridatas);
echo "<pre>".print_r($unseridatas,true)."</pre>";  //change array 


echo "<hr/>";






//24AC
//17AM
?>