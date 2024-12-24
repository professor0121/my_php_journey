->All OOPS Concept in PHP

->Class and Object are done

->Constructor is done

->Destrctor is done

->Signup is done

->Inheritance.....
    ->Single inheritance
    ->Multilevel inheritance

=>PHP - Class Constants
        Class constants can be useful if you need to define some constant data within a class.

        A class constant is declared inside a class with the const keyword.

        A constant cannot be changed once it is declared.

        Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

        We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:


```PHP
<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

To continued for next time......