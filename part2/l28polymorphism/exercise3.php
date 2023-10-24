<?php 

abstract class vehicle{

    abstract public function start();
    abstract public function stop();

}


class car extends vehicle{

    public function start(){
        echo "Car Started... <br/>";
    }

    public function stop(){
        echo "Car Stopped... <br/>";
    }

}

class bike extends vehicle{

    public function start(){
        echo "Bike Started... <br/>";
    }

    public function stop(){
        echo "Bike Stopped... <br/>";
    }

}



echo "This is Polymophism Concept with abstract <br/>";

$obj1 = new car();
$obj1 -> start();
$obj1 -> stop();

echo "<hr/>";

$obj1 = new bike();
$obj1 -> start();
$obj1 -> stop();

?>