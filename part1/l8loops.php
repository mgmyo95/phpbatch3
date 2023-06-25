<?php 

//PHP Loops

// for 
// foreach 
// while 
// do..while

$colorones = ["red","green","blue","white","black","gray","pink"];  //indexed array
print_r($colorones);
echo "<br/>";
var_dump($colorones);
echo "<br/>";
echo count($colorones);
echo "<br/>";

$coloroneskey = array_keys($colorones);
var_dump($coloroneskey);

echo "<br/>";
echo "<br/>";

//for loop 
// for(statment1,statment2,statment3){
//     code to executed;
// }

for($i = 0 ; $i < count($colorones) ; $i++){
    echo "$i";
    echo "<br/>";

    // echo "This is indexed array or menual array by forloop = index key is ".$i. " and value is ".$colorones[$i]."<br/>";

    echo "This is indexed array or menual array by forloop = index key is ".$coloroneskey[$i]. " and value is ".$colorones[$i]."<br/>";
};

echo "<br/>";
echo "<hr/>";

$posts = [
    "postone"=>"this is news post one",
    "posttwo"=>"this is news post two",
    "postthree"=>"this is news post three",
    "postfour"=>"this is news post four"
];  //Associative array

$postkeys = array_keys($posts);
var_dump($postkeys);

echo "<br/>";


for($x = 0 ; $x < count($posts) ; $x++){
    echo $postkeys[$x];
    // echo "<br/>";
    echo "This is indexed array or menual array by forloop = index key is ".$postkeys[$x]. " and value is ".$posts[$postkeys[$x]]."<br/>";
};

echo "<br/>";

$employees = [
    ["name"=>"Aung Aung","gender"=>"Male"],
    ["name"=>"Su Su","gender"=>"Female"],
    ["name"=>"Nu Nu","gender"=>"Female"],
    ["name"=>"Kyaw Kyaw","gender"=>"Male"],
    ["name"=>"Tun Tun","gender"=>"Male"]
]; //Multidimensional Array

$employeeskey = array_keys($employees);
var_dump($employeeskey);
echo "<br/>";

//remove cover first array (multidimensional array)
for($k = 0 ; $k < count($employees) ; $k++){
    $newkey = array_keys($employees[$employeeskey[$k]]);
    //remove cover second array (associated array);
    // var_dump($newkey);
    echo "<br/>";

    for($j = 0 ; $j < count($newkey) ; $j++){
        echo "This is indexed array or menual array by forloop = index key is ".$newkey[$j]. " and value is ".$employees[$k][$newkey[$j]]."<br/>";
    }

}

//---------------------------||-------------------
//foreach loop

//foreach(mainarray as value){
    //code to executed
// }

                //keyword
//foreach(mainarray as key=>value){
    //code to executed 
// }

echo "<br/>";

// foreach($colorones as $colorone){
//     echo "This is indexedarray or manual array by foreach = ". $colorone . "<br/>";
// }

foreach($colorones as $key=>$colorone){
    echo "This is indexed array or menual array by foreach = index key is ".$key ." and value is ".$colorone."<br/>";
}

echo "<br/>";

foreach($posts as $key=>$post){
    echo "This is indexed array or menual array by foreach = index key is ".$key ." and value is ".$post."<br/>";
}

echo "<br/>";

foreach($employees as $index=>$employee){
    // echo $employee;

    foreach($employee as $key=>$value){
        echo "This is indexed array or menual array by foreach = index key is ".$key ." and value is ".$value."<br/>";
    }
}

echo "<br/>";

//---------------------------||-------------------

//while loop

//start

// while(condition is true){
//     code to be executed;
//     inn or dec
// }

$x = 0;
while($x < count($colorones)){
//     echo $colorones[$x] . "<br/>";
//     $x++;

//echo "This is indexed array or menual array by forloop = index key is ".$x ." and value is ".$colorones[$x]."<br/>";

echo "This is indexed array or menual array by while = index key is ".$coloroneskey[$x] ." and value is ".$colorones[$x]."<br/>";

$x++;
}

echo "<br/>";

$x = 0;
while($x < count($posts)){
    //echo $x;
    echo "This is indexed array or menual array by while = index key is ".$postkeys[$x] ." and value is ".$posts[$postkeys[$x]]."<br/>";
    $x++;
}

echo "<br/>";

$x = 0;
$key = array_keys($employees);
while($x < count($employees)){
    
    $newkey = array_keys($employees[$key[$x]]);
    $y = 0;
    while($y < count($newkey)){
        echo "This is indexed array or menual array by while = index key is ".$newkey[$y]." and value is ".$employees[$x][$newkey[$y]]."<br/>";
        $y++;
    }
    $x++;
}

//---------------------------||-------------------

//do...while loop 
// start
// do{
//     code to be executed
//     inc or dec
// }while(condition it true);

$x = 1;
do{
    echo "do while loop is $x";
    $x++;
}while($x <= 5);
echo "<br/>";
echo "<br/>";

$y = 0;
do{
    // echo "This is indexe array by dowhile = index key is ".$y. " and value is ".$colorones[$y]."<br/>";
    echo "This is indexed array or menual array by while = index key is ".$coloroneskey[$y] ."and value is ".$colorones[$y]."<br/>";
    $y++;
}while($y < count($colorones));

echo "<br/>";

$y = 0;
do{
    echo "This is indexed array or menual array by while = index key is ".$postkeys[$y] ."and value is ".$posts[$postkeys[$y]]."<br/>";
    $y++;
}while($y < count($posts));

echo "<br/>";
echo "<hr/>";

$g = 0;
do{
    $newkey = array_keys($employees[$key[$g]]);
    $h = 0;
    do{
        echo "This is indexed array or menual array by while = index key is ".$newkey[$h] ." and value is ".$employees[$g][$newkey[$h]]."<br/>";
        $h++;
    }while($h < count($newkey));
  
    $g++;
}while($g < count($employees));


//17BT

?>

