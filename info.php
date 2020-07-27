<?php
     
    //phpinfo();

    for ($i=0; $i < 10; $i++) { 
        print($i." Hello World!!!<BR>\n");
    }
     
    echo "new";

    var_dump($i);

$var1 = "werty";
echo $var1[0];
echo $var1[1];
echo $var1[4];

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
$var -= 1;
echo $var;

$text = "<br><br>Привет!!!";

echo $text;

$text ="abcde";
$text[0] = "!";
echo $text;

$num = "12345";
$num = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo $num."<BR>";


	//Пробуем вывести с помощью var_dump содержимое массива $a:
	$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    var_dump($a);
    echo "<BR>";
    echo "<BR>";
    
    	//Ключи могут быть строками:
	$b['Коля'] = 100;
	$b['Вася'] = 200;
	$b['Петя'] = 300;
	var_dump($b); //с помощью var_dump убеждаемся в том, что $a – это массив
    echo "<BR>";
    echo "<BR>";

    	//Многомерный массив студентов:
	$c = [
		'boys' => ['Коля', 'Вася', 'Петя'],
		'girls' => ['Даша', 'Маша', 'Лена'],
    ];
    echo $c['boys'][1];

    $a = null;
	//Если $a Непустое, то...
	if (!empty($a)) echo 'Верно!'; else echo 'Неверно!'; //выведет 'Неверно!', так как $a пустое
?>
<?php
	//Пример на работу вместе с HTML
	$a = false;
	if ($a) {
		/*
			Мы оборвали PHP, но HTML код ниже
			все равно будет виден на экране только если $a равно true.
		*/
	?>
		<p>Здесь выведем какой-то HTML!</p>
	<?php
		/*
			Здесь мы продожаем PHP, открыв скобку <?php
			и закрываем фигурную скобку от ифа.
		*/
	}
?>


<?php
	//Этот массив дан:
    $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
    echo $arr['Коля'];

    $arr = [1,2,3,4,5];

    $arr = [
        'ru'=>['голубой', 'красный', 'зеленый'],
        'en'=>['blue', 'red', 'green'],
    ];
	echo $arr['ru'][0]; //выведет 'голубой'
	

	$arr = [2,3,5,9];
	$result = $arr[0]*$arr[1]+$arr[2]*$arr[3];
	echo "<br>".$result;

	unset($arr);
	$arr[] = 1;
	$arr[] = 2;
	$arr[] = 3;
	$arr[] = 4;
	$arr[] = 5;

	var_dump($arr);

	$a = array ('a' => 'apple', 'b' => 'banana', 'c' => 'mango');
	print($a['c']);
	$a1 = array ('a' => 1, 'b' => 2, 'c' => 3);

	print ($a1['a'] + $a1['b'] + $a1['c']);

	$a2 = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
	echo $a2['Коля'];
	echo $a2['Петя'];

	$a3['1'] = "Monday";
	$a3[] = "Tuesday";
	$a3[] = "Wednesday";
	$a3[] = "Thursday";
	$a3[] = "Friday";
	$a3[] = "Saturday";
	$a3[] = "Sunday";

	echo("<br>".$a3[date(w)]);
	$day = date(w);

	if($day == 0) $day += 1;
	echo("<br>".$a3[$day]);

	unset($arr);
	$arr = [
		'cms'=>['joomla', 'wordpress', 'drupal'],
		'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
	];

	echo "<br>".$arr['cms'][0];
	echo "<br>".$arr['cms'][2];
	echo "<br>".$arr['colors']['blue'];
	echo "<br>".$arr['colors']['green'];

	unset($arr);
	$arr = array ('ru' => ['1' =>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс',],
			  	  'en' => ['mn', 'th', 'wen', 'thu', 'fr', 'st', 'sun',]);

	echo "<br>".$arr['ru'][1]; 
	echo "<br>".$arr['en'][0]; 

	$lang = "ru";
	$day = 4;
	echo "<br>".$arr[$lang][$day]; 


	
?>