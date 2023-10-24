<?php 

ini_set("display_errors",1); //system error

function mycolor($col){
    if($col != "red"){
        throw new Exception("I hate $col color");  //system error 
    }
    return "Yeah! my fav color is $col";
};

echo mycolor("red");
echo "<hr/>";

function mynum($base,$power){
    if($power > 3){
        throw new Exception("We not allow over $power");
    }
    return $result = pow($base,$power);
};

echo mynum(2,3);
echo "<hr/>";

// =>try..catch Statment

// try{
//     code to be executed
// }catch(Exception $e){
//     code to be exception is caught
// }

function mycolour($col){
    if($col !== "red"){
        throw new Exception("I hate $col color.");
    };
    return "Yeah! my fav color is $col color";
};

// try{
//     echo mycolour("black");
// }catch(Exception $e){
//     echo "You should not try with this color";
// }

try{
    echo mycolour("black");
}catch(Exception $e){
    // echo "You should not try with this color" . $e -> getMessage();
    echo $e -> getMessage();
}

echo "<hr/>";

function mynumber($base,$power){
    if($power > 5){
        throw new Exception("We not allow over $power.");
    };

    $result = pow($base,$power);
    return $result;
};

try{
    echo mynumber(3,6);
}catch(Exception $e){
    echo "You should not over." . $e -> getMessage();
}
echo "<hr/>";

//=> try...catch...finally statment

// try{

// }catch(Exception $e){

// }finally{
//     //code that always runs ragardless of weather an exception was catch or not
// }


function myval($base,$power){
    if($power > 3){
        throw new Exception("We not allow over $power.");
    };

    $result = pow($base,$power);
    return $result;
};

// try{
//     echo myval(3,5);
// }catch(Exception $e){
//     echo "You should not over." . $e -> getMessage();
// }finally{
//     echo "<br/>";
//     echo "Hay there!! I am joker.";
// }

try{
    echo myval(3,5);
}finally{
    echo "<br/>";
    echo "Hay there!! I am joker.";
}

echo "<hr/>";


?>

<!-- 12CC -->