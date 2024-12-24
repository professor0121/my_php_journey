<?php
class test
{
    public $number;
     function __construct($number)
    {
        $this->number = $number;
        // $this->number =10;
    }
      function showdata()
    {
        echo $this->number;
    }
}
$test_object = new test(15);
$test_object->showdata();
