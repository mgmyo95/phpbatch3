<?php 

//? Spread Operator (...) 

function sumresult($num1,$num2,$num3){
    return $num1+$num2+$num3;
}

echo sumresult(1,2,3);
echo "<br/>";

// echo sumresult([1,2,3]);  //! error
echo sumresult(...[1,2,3]); //6

echo "<br/>";

//? => func_get_args()  = function get argument (output result array)

function totalresult(){

    $arrs = func_get_args();
    //? echo "<pre>".print_r($arrs,true)."</pre>";
    //? echo count($arrs) . "<br/>";

    $total = 0;

    for($i = 0 ; $i < count($arrs) ; $i++){
        $total += $arrs[$i];
    }

    return $total;

}

echo totalresult(100,200,300);

echo "<hr/>";

function getval($val1,$val2,$val3){
    echo "Val1 result is = ${val1} <br/>"; 
    echo "Val2 result is = ${val2} <br/>"; 
    echo "Val3 result is = ${val3} <br/>"; 
}

getval("aung aung","maung maung","kyaw kyaw");
echo "<br/>";
// getval(...["red","green","blue"]); //! error
getval(...["red","green","blue"]); //? Val1 result is = red Val2 result is = green Val3 result is = blue

echo "<hr/>";

//? => Spread Operator In Array 

$phones = ['apple','oppo','vivo','samsung'];
$cars = ['toyota','suzuki','mazda'];
$computers = ['mac','aoc','acer'];

$myowns = [$phones,$cars,$computers];
echo "<pre>".print_r($myowns,true)."</pre>";  //? multi dimation array

$yourowns = [...$phones,...$cars,...$computers];
echo "<pre>".print_r($yourowns,true)."</pre>";  //? manual array


echo "This is Variadic Function <br/>";

function myfun1($val){
    return $val;
}

echo myfun1('mango'); //? mango
echo "<br/>";

echo myfun1('mango','orange'); //? mango
echo "<br/>";

//? variadic function
function myfun2(...$val){
    return $val;
}

echo myfun2(); //array

// echo myfun2('mango'); //? array
// echo "<br/>";

// echo myfun2('mango','orange'); //? array
// echo "<br/>";

echo "<pre>".print_r(myfun2('mango'),true)."</pre>";
echo "<pre>".print_r(myfun2('mango','orange'),true)."</pre>";
echo "<pre>".print_r(myfun2(100,200,300),true)."</pre>";
echo "<pre>".print_r(myfun2(['aung aung','kyaw kyaw'],['aye aye','nu nu']),true)."</pre>";
echo "<pre>".print_r(myfun2("red","green","blue",['aung aung','kyaw kyaw'],['aye aye','nu nu']),true)."</pre>";


function myfun3(...$val){
    echo $val[1] . "<br/>";
}

myfun3('maung maung','aung aung','zaw zaw'); //? aung aung
myfun3(['maung maung','aung aung','zaw zaw'],'aye aye'); //? aye aye 

function myfun4(...$val):string{
    return $val[2] . $val[0][1] . $val[1] . "<br/>";
}

echo myfun4(['maung maung ','aung aung ','zaw zaw'],' is my elder borthers','Mr '); //? Mr aung aung is my elder brothers

echo "<br/>";

function myfun5(string $name,int ...$age):string{
    return "${name} is {$age[0]} years old.";
}

echo myfun5('zaw zaw',26);  //? zaw zaw is 26 years old 
echo "<hr/>";

function myfun6(int ...$numbers):int{
    return array_sum($numbers);  //? because spread operator is array output.
}

echo myfun6(1,2,3);
echo "<hr/>";

//? => null coalescing operator ( ?? ) 

function myfun7(...$val){
    echo $val[1] ? "Valid Data" : "No Data";
    echo "<br/>";

    echo $val[1] ?? "No Data";

}

myfun7("Hello World","Dream World"); //? Valid data Dream World
myfun7("Hello World");  //? No Data No Data  
echo "<hr/>";


?>