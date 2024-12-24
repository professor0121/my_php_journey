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
 


PHP Connect to MySQL
PHP 5 and later can work with a MySQL database using:

MySQLi extension (the "i" stands for improved)
PDO (PHP Data Objects)
Earlier versions of PHP used the MySQL extension. However, this extension was deprecated in 2012.

Should I Use MySQLi or PDO?
If you need a short answer, it would be "Whatever you like".

Both MySQLi and PDO have their advantages:

PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

Both are object-oriented, but MySQLi also offers a procedural API.

Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

MySQL Examples in Both MySQLi and PDO Syntax
In this, and in the following chapters we demonstrate three ways of working with PHP and MySQL:

MySQLi (object-oriented)
MySQLi (procedural)
PDO
MySQLi Installation
For Linux and Windows: The MySQLi extension is automatically installed in most cases, when php5 mysql package is installed.

For installation details, go to: http://php.net/manual/en/mysqli.installation.php

PDO Installation
For installation details, go to: http://php.net/manual/en/pdo.installation.php


```PHP
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

```