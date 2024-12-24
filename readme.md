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
```

=>PHP Namespaces
Namespaces are qualifiers that solve two different problems:

        They allow for better organization by grouping classes that work together to perform a task
        They allow the same name to be used for more than one class
        For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.
```PHP
<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
```
To continued for next time......