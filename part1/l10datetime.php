<?php 

//1 jan 1970 UTC firstly programming

//time zone part
date_default_timezone_set("Asia/Yangon");
//https://www.php.net/manual/en/timezones.php
  
  $getdate = getDate();

//   echo $getdate;
  echo "<br/>";

  var_dump($getdate);
  echo "<br/>";

  echo "This is second = " .$getdate["seconds"];  //59
  echo "<br/>";
  echo "This is minute = " .$getdate["minutes"];  //32
  echo "<br/>";
  echo "This is hours = " .$getdate["hours"];  //17
  echo "<br/>";
  

  echo "This is wday = " .$getdate["wday"]; //5 day of the week 0 = sunday 1 = monday...
  echo "<br/>";
  echo "This is weekday = " .$getdate["weekday"]; //Friday
  echo "<br/>";


  echo "This is year = " .$getdate["year"];  //2023
  echo "<br/>";
  echo "This is yday = " .$getdate["yday"];  //61 day of the year january start 
  echo "<br/>";
 
  echo "This is mon = " .$getdate["mon"]; //3
  echo "<br/>";
  echo "This is month = " .$getdate["month"];  //March
  echo "<br/>";
  echo "This is mday = " .$getdate["mday"];  //3
  echo "<br/>";

  echo "This is 0 = " .$getdate["0"];
  echo "<br/>"; //1677841379
  echo "<br/>";

  $time = time();
  echo "This is time timestamp = ". $time; //1677841379
  echo "<br/>";

  //DATE/TIME format 
  // date(format,timestamp);

  $date = date("a",$time);
  echo "This is format a = ". $date; //am / pm
  echo "<br/>";

  $date = date("A",$time);
  echo "This is format A = ". $date; //AM / PM
  echo "<br/>";

  $date = date("d",$time);
  echo "This is format d = ". $date;
  echo "<br/>";  //03  day leading zero

  $date = date("D",$time);
  echo "This is format D = ". $date;
  echo "<br/>";  //fri  sun to mon

  $date = date("F",$time);
  echo "This is format F = ". $date;
  echo "<br/>";  //March  january to december

  $date = date("g",$time);
  echo "This is format g = ". $date;  //5 hour by number by 12hr format , no leading zero
  echo "<br/>";

  $date = date("G",$time);
  echo "This is format G = ". $date; //17 hour by number by 12hr format , no leading zero
  echo "<br/>";

  $date = date("h",$time);
  echo "This is format h = ". $date; //05 hour by number by 12hr format ,  leading zero
  echo "<br/>";

  $date = date("H",$time);
  echo "This is format H = ". $date; //17 hour by number by 24hr format ,  leading zero
  echo "<br/>";

  $date = date("i",$time);
  echo "This is format i = ". $date; //58 minute
  echo "<br/>";

  $date = date("j",$time);
  echo "This is format j = ". $date; //3 day of month no leading zero
  echo "<br/>";

  $date = date("l",$time);
  echo "This is format l = ". $date; //Friday
  echo "<br/>";

  $date = date("L",$time);
  echo "This is format L = ". $date; //0 Leap Year(1 = true , 0 = false)
  echo "<br/>";

  $date = date("m",$time);
  echo "This is format m = ". $date; //03 day of month leading zero
  echo "<br/>";

  $date = date("M",$time);
  echo "This is format M = ". $date; //Mar (Jan/Feb)
  echo "<br/>";

  $date = date("n",$time);
  echo "This is format n = ". $date; //3 day of month no leading zero
  echo "<br/>";

  $date = date("r",$time);
  echo "This is format r = ". $date; //Fri, 03 Mar 2023 18:07:13 +0630
  echo "<br/>";

  $date = date("s",$time);
  echo "This is format s = ". $date; //47 second
  echo "<br/>";

  $date = date("U",$time);
  echo "This is format U = ". $date; //1677843501
  echo "<br/>";

  $date = date("y",$time);
  echo "This is format y = ". $date; //23 year shortcode
  echo "<br/>";

  $date = date("Y",$time);
  echo "This is format Y = ". $date; //2023 year
  echo "<br/>";

  $date = date("z",$time);
  echo "This is format z = ". $date; //61 days of year
  echo "<br/>";
  
  //3TT

?>