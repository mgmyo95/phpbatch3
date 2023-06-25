<?php 

// setcookie('mmk','myanmar kyat');
// echo "set cookies successfully";

setcookie('mmk','myanmar kyat',time()+(86400*5));
echo "set cookies successfully";

echo "<pre>".print_r($_COOKIE,true)."</pre>";

if(isset($_COOKIE['mmk'])){
    echo "mmk stand for : " . $_COOKIE['mmk'] . "<br/>";
}
?>