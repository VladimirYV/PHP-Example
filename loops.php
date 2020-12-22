<?php



	$arr = [1, 2, 3, 4, 5]; //этот массив дан
    foreach ($arr as $elem) {
        echo $elem.'<br>';
    }
  
    //ассоциативный массив
    unset($arr);

    $arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
    foreach ($arr as $key=>$elem) {
        echo "<br>".$key."-".$elem;
    }

$a = 56;
$b = 12;
$c = (int) ($a / $b);
echo $c;
?>