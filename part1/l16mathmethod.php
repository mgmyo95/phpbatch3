<?php 
//abs()Function 
//abs(number)

echo (abs(32.75));  //32.75
echo "<br/>";

echo (abs(-32.75));  //32.75
echo "<br/>";

echo (abs(32));  //32
echo "<br/>";

echo (abs(-32));  //32.75
echo "<br/>";

echo "<hr/>";

// round()Function
//round(number)

echo (round(32.65));  //  33
echo "<br/>";

echo (round(32.54));  //  33
echo "<br/>";

echo (round(32.44));  //  32
echo "<br/>";

echo (round(-32.45));  //  32
echo "<br/>";
echo "<hr/>";

//ceil()Function 
//ceil(number)

echo (ceil(32.11));  //  33
echo "<br/>";

echo (ceil(32.56));  //  33
echo "<br/>";

///***
echo (ceil(-32.11));  //  33
echo "<br/>";

echo (ceil(-32.99));  //  33
echo "<br/>";
echo "<hr/>";

//floor()Function 
//floor(number)
echo (floor(32.11));  //  32
echo "<br/>";

echo (floor(32.56));  //  32
echo "<br/>";

///***
echo (floor(-32.11));  //  -33
echo "<br/>";

echo (floor(-32.99));  //   -33
echo "<br/>";
echo "<hr/>";

//max()Function 
//max(number)

echo (max(2,4,6,20,8,10));  //  20
echo "<br/>";
echo (max(2,4,6,20,-40,8,10));  //  20
echo "<br/>";
echo (max(2,4,6,20,-40,8,10,"100"));  //  100
echo "<br/>";

echo "<hr/>";

//min()Function 
//min(number)

echo (min(2,4,6,20,8,10));  //  2
echo "<br/>";
echo (min(2,4,6,20,-40,8,10));  //-40
echo "<br/>";
echo (min(2,4,6,20,-40,8,10,"-100"));  //  -100
echo "<br/>";

echo "<hr/>";

//pow()Function 
//pow(x,y)

echo (pow(2,4));  //  16
echo "<br/>";
echo (pow(3,4));  //  81    
echo "<br/>";
echo "<hr/>";

//sqrt()Function 
//sqrt(number)

echo (sqrt(4));  //2
echo "<br/>";

echo (sqrt(9));  //3
echo "<br/>";

echo (sqrt(81));  //9
echo "<br/>";

echo (sqrt(0.81));  //0.9
echo "<br/>";
echo (sqrt(-4));  //NAN
echo "<br/>";
echo "<hr/>";

//rand()Function 
//rand() or rand(min,max)
echo (rand()); 
echo "<br/>";
echo (rand()); 
echo "<br/>";

echo (rand(1000,10000)); 
echo "<br/>";
echo "<hr/>";







?>