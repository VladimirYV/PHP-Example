<?php
$n = preg_match("/cats/i", "Cats are fun. I like cats.", $match);
echo "Количество соответсвий $n: $match[0]";

$n = preg_match_all("/cats/i", "Cats are fun. I like cats.", $match);
echo "<br>Количество соответствий $n: ";
for ($j=0 ; $j < $n ; ++$j) echo $match[0][$j]." ";

echo preg_replace("/cats/i", "dogs", "<br>Cats are fun. I like cats.");
?>