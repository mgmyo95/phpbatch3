<?php 

echo "<pre>".print_r($_COOKIE,true)."</pre>";

if(isset($_COOKIE['thb'])){
    echo "thb stand for : " . $_COOKIE['thb'];
}

?>