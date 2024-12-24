<?php
class car{
    public $model;
    public $color;

    function set_model($model,$color) {    
        $this->model=$model;
        $this->color=$color;
    }

    function get_model(){
        return array("model"=>$this->model,"color"=>$this->color);
    }

}
$volvo=new car();
$volvo->set_model(2000,"red");
// echo $volvo->get_model();
$data=$volvo->get_model();
echo $data['model'];
echo "<br>";
echo $data['color'];
?>