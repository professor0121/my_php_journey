<?php
class vehicle
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function showInfo()
    {
        echo "this is {$this->name} and its color is {$this->color}";
    }
}

class car extends vehicle
{
     public function showDetails(){
        echo "i am vehicle and also a car";
     }
}

$car_object = new car("volvo","red");
$car_object->showDetails();
echo "<br>";
$car_object->showInfo();
