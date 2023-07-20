<?php 



//Variables 
// variable scope 
// (i)Global Scope Variable
// (ii)Local Scope Variable
// (iii)Statis Variable Scope

$fullname = 'U Kyaw Kyaw';
$job = "Developer";

echo $fullname,$job;
echo $job;
echo "$fullname";  //result = U Kyaw Kyaw
echo `$job`;
echo '$fullname';  //result = $fullname

print "<br/>";


//space ma thi
echo "My name is                          $fullname";
echo "<br/>";
echo "My name is ${fullname}";  //result = My name is U Kyaw Kyaw;
echo "<br/>";
echo 'My name is ${fullname}';  //result = My name is $fullname
echo "<br/>";
echo "I am {$job}";  //result = I am Developer 

echo "<br/>";

echo 'He\'s my father , he is a $job';  //result = He's my father, he is a $job;
echo "<br/>";
echo 'He\'s my father , he is a \$job';  //result = He's my father, he is a $job;
echo "<br/>";
echo "He's my father , he is a \${job}";  //result = He's my father, he is a ${job};
echo "<br/>";
echo "He's my father , he is a \{$job}";  //result = He's my father, he is a \{Developer};
echo "<br/>";
echo "He's my father , he is a {\$job}";  //result = He's my father, he is a {$job};
echo "<br/>";

echo "<hr/>";

$gender = 'male';
// echo $gender;
$gender = print 'female';

// $nation = echo 'burma';  // result = error;

echo "<hr/>";

// Concat (.)
$firstname = "Aung ";
$lastname = "Kyaw Kyaw";

echo $firstname;
echo $lastname;
echo "<br/>";

echo $firstname.$lastname;
echo "<br/>";

echo $firstname.' '.$lastname;

// echo $firstname+$lastname; error

// Comments 
#Single Line Comment 

/*Multi Line Comment 

 comment 1
 comment 2
 comment 3 */

 echo "<hr/>";

 //------------------------ 

 //=>constant Variable

//define function()
//const keyword 

//define('variablename','value');
//string/int/boolean/float oki 
//variable name should be uppercase
//redefine are deny 

define('FULLNAME','Honey Nway Oo');
echo FULLNAME; //Honey Nway Oo 

echo "<br/>";

define('FULLNAME','Ma Ma Mya');
echo FULLNAME; //Honey Nway Oo 

echo "<br/>";

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','phpdbone');

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echo DB_NAME;
echo "<br/>";

//=>constant('name')function 

echo constant('DB_HOST');
echo "<br/>";
echo constant('DB_USER');
echo "<br/>";
echo constant('DB_PASS');
echo "<br/>";
echo constant('DB_NAME');
echo "<br/>";

//=>constant : const keyword 
//Note 
//string/int/boolean/float oki 
//variable name should be uppercase
//redefine are deny 

const MESSAGE = "Hello Sir , are you ready to lean PHP OOP concept ??";
echo MESSAGE;
echo "<br/>";
echo constant('MESSAGE');
echo "<br/>";

const MESSAGE = "Are you ready to lean Javascript ES6 concept ??";
echo MESSAGE;
echo "<br/>";
echo constant('MESSAGE');
echo "<br/>";





?>

<!-- 20IN; -->

<!-- php -S localhost:8000 -t foldername 
localhost:8000/filename -->