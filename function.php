<?php

include_once "library1.php";
require_once "library.php";

function fix_names($n1, $n2, $n3) {
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
  return $n1." ".$n2." ".$n3;
}

echo fix_names("WILLIAM", "henry", "gatES");


$names = fix_names1("WILLIAM", "henry", "gatES");
echo "<br>".$names[0] . " " . $names[1] . " " . $names[2];

function fix_names1($n1, $n2, $n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
return array($n1, $n2, $n3);
}


$n1 = "WILLIAM";
$n2 = "henry";
$n3 = "gates";

echo "<br>".$n1." ".$n2." ".$n3;
fix_names2();
echo "<br>".$n1." ".$n2." ".$n3;

function fix_names2()
{
  global $n1, $n2, $n3;
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
}

if (function_exists("array_combine"))
{
echo "<br>Функция существует";
}
else
{
echo "<br>Функция не существует, желательно создать ее самостоятельно";
}

?>

