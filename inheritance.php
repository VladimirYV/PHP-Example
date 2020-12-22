<?php

$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone =  "21342134234";
$object->email = "sdfds@gmail.com";
$object->display();
class User
{
  public $name, $password;
  function save_user() 
  {
    echo "Code save users data";
  }
}

class Subscriber extends User
{
  public $phone, $email;

  function display()
  {
    echo "Name: " . $this->name . "<br>";
    echo "Pass: " . $this->password . "<br>";
    echo "Phone:" . $this->phone . "<br>";
    echo "Email: " . $this->email . "<br>";
  }
}
?>

<?php
$object = new Tiger();
echo "У тигров есть...<br>";
echo "Мех: " . $object->fur . "<br>";
echo "Полосы: " . $object->stripes;
class Wildcat
{
  public $fur; // У диких кошек есть мех
  function __construct()
  {
    $this->fur = "TRUE";
  }
}

class Tiger extends Wildcat
{
  public $stripes; // У тигров есть полосы
  function __construct()
  {
    parent::__construct(); // Первоочередной вызов родительского
    // конструктора
    $this->stripes = "TRUE";
  }
}
?>