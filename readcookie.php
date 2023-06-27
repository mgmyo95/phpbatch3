<?php 

echo "<pre>".print_r($_COOKIE,true)."</pre>";

if(isset($_COOKIE)){
    echo "mmk is stand for " . $_COOKIE['mmk'];
}

?>