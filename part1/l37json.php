<?php 
// xml 
// json

// json_encode(array); json format  //from array format to json format string format
// json_decode(array);  //single 
// json_decode(array,bool);  //multi


// ------------------can't--------------
$colors = ["red","green","blue"];
var_dump($colors);

$mycolors = json_encode($colors);
echo $mycolors;
echo "<br/>";
var_dump($mycolors);
echo "<br/>";

//-------------------------- 

$students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
echo "<pre>".print_r($students,true)."</pre>";
echo $students['name'] . "<br/>";
echo $students['age'] . "<br/>";
echo $students['city'] . "<br/>";

$studentsen = json_encode($students);
echo $studentsen;

// $myobj = '{
//     "name" : "aung aung",
//     "age" : 25,
//     "city" : "yangon"
// }';

// json can't print out 
// echo $studentsen['name'];
// echo $studentsen['name'];
// echo $studentsen['name'];

echo "<hr/>";
                          
//=> decode by single parameter
$students = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentsde = json_decode($students);
echo "<pre>".print_r($studentsde,true)."</pre>";

// stdClass Object
// (
//     [name] => aung aung
//     [age] => 25
//     [city] => yangon
// )

// (->) object operator  //can print 
echo $studentsde -> name . "<br/>";
echo $studentsde -> age . "<br/>";
echo $studentsde -> city . "<br/>";

foreach($studentsde as $key => $value){
    echo $key . " is " . $value . "<br/>";
};

//=> Decode by multi parameter 
$students = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentsde = json_decode($students,true);
echo "<pre>".print_r($studentsde,true)."</pre>";

// can't print
// echo $studentsde -> name . "<br/>";
// echo $studentsde -> age . "<br/>";
// echo $studentsde -> city . "<br/>";

echo $studentsde['name'] . "<br/>";
echo $studentsde['age'] . "<br/>";
echo $studentsde['city'] . "<br/>";

echo "<hr/>";







?>