<?php
$paper[0] = "Copier";
$paper[1] = "Inkjet";
$paper[2] = "Laser";
$paper[3] = "Photo";

for ($j = 0 ; $j < 4 ; ++$j)
  echo "$j: $paper[$j]<br>";

$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "Элемент массива p1: " . $p1[2] . "<br>";
$p2 = array('copier'=>"Copier & Multipurpose",
            'inkjet'=>"Inkjet Printer",
            'laser'=>"Laser Printer",
            'photo'=>"Photographic Paper");

echo "Элемент массива p2: " . $p2['inkjet'] . "<br>";



$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;
foreach ($paper as $item)
{
echo "$j: $item<br>";
++$j;
}

foreach ($p2 as $item => $description)
echo "$item: $description<br>";

while (list($item, $description) = each($p2))
echo "$item: $description<br>";


echo (is_array($p2)) ? "Это массив" : "Это не массив";
echo count($p2);
echo "<br>";
$temp = explode(' ', "Это предложение из пяти слов");
print_r($temp);

$temp = explode('***', "Это***предложение***со***звездочками");
print_r($temp);

$item = end($p2);
echo $item;
?>