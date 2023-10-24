<?php 

interface greeting{

    public function speak();

}


class myanmar implements greeting{

    public function speak(){
        return "Mingalar... <br/>";
    }

}

class thailand implements greeting{

    public function speak(){
        return "Sawadikap... <br/>";
    }

}

class english implements greeting{

    public function speak(){
        return "Hello... <br/>";
    }

}


function results($objs){

    foreach($objs as $obj){
        echo $obj -> speak() . "<br/>";
    }

}

echo "This is Polymophism Concept with interface <br/>";

$datas = [
    new myanmar(),
    new thailand(),
    new english()
];

results($datas);

echo "<hr/>";

?>