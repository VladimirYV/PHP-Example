<?php

$object = new User;
print_r($object);
echo "<br>";

$object -> name = "Joe";
$object -> password = "mypass";
print_r($object);
echo "<br>";

echo $object -> get_password();
echo "<br>";

$object -> save_user();
echo "<br>";
User::pwd_string();

class User
{
  public $name, $password;
  
  function __construct()
  {
    //код конструктора
    echo "<p>Construct is work. Guest</p>";
  }

  function __destruct()
  {
    // Сюда помещается код деструктора
  }
  
  function get_password()
  {
    return $this->password;
  }

  function save_user() 
  {
    echo "Code save users data";
  }

  static function pwd_string()
  {
    echo "статический метод Пожалуйста, введите свой пароль";
  }
}

?>


<?php

$object1 = new User1();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name ="Amy";
echo "<br>";
echo "<br>";
echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name;

class User1
  {
  public $name;
  }

?>

<?php
echo "<br>";
echo "<br>";
// Constants
Translate::lookup();
class Translate
{
  const ENGLISH = 0;
  const SPANISH = 1;
  const FRENCH = 2;
  const GERMAN = 3;
  
  Static function lookup()
  {
    echo self::SPANISH;
  }
}
?>

<?php
class Example
{
  var $name = "Michael"; // Нерекомендуемая форма, аналогичная public
  public $age = 23; // Открытое свойство
  protected $usercount; // Защищенное свойство
  private function admin() // Закрытый метод
  {
    // Сюда помещается код метода admin
  }
}
?>