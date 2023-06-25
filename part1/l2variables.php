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

?>

<!-- 20IN; -->

<!-- php -S localhost:8000 -t foldername 
localhost:8000/filename -->