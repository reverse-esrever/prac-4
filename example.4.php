<?php 

class Human
{
    public string $name;
    
    public function __construct($name){
        $this->name = $name;
    }


    public function callWhoIAm(){
        echo $this->name;
    }
}

$human1 = new Human("Денис");
$human2 = new Human("Борис");
$human1->callWhoIam();
echo PHP_EOL;
$human2->callWhoIam();