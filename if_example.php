<?php
	$a = 'hi';
	//Если $a пустое, то...
	if (empty($a)) echo 'Верно!'; else echo 'Неверно!'; //выведет 'Неверно!', так как $a не пустая
?>

<?php
	//Пример на работу вместе с HTML
	$a = true;
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

	$a = 10;
	echo "<br>";
	if (empty($a)){
		echo "А пустое";
	} elseif ($a > 0) {
		echo "a Big";
	} else {
		echo "a Small";
	}
	echo "<br>";
	$a = true;
	//Если $a равно true, то...
	if ($a) echo 'Верно!'; else echo 'Неверно!'; //выведет 'Верно!', так как $a равно true
	echo "<br>";
	$a = true;
	//Если $a НЕ true (то есть false!), то...
	if (!$a) echo 'Верно!'; else echo 'Неверно!'; //выведет 'Неверно!', так как $a равно true

	echo "<br>";
		//Решение задачи через elseif – не самое удачное
		if ($a == 'ru') { //фраза на русском
			echo 'Русский текст';
		} elseif ($a == 'en') { //фраза на английском
			echo 'Английский текст';
		} elseif ($a == 'de') { //фраза на немецком
			echo 'Немецкий текст';
		}
		echo "<br>";
		$lang = 'en';
		switch ($lang) {
			case 'ru':
				echo 'Русский текст';
			 break;
			case 'en': 
				echo 'Английский текст';
			break;
			case 'de': 
				echo 'Немецкий текст';
			break;
			default:
				echo 'Данный язык не поддерживается'; 
			break;
		}
	
?>

<?php
	$min = 10;
		echo "<br>";
	if ($min >= 0 and $min <= 14) {
		echo 'В первую четверть.';
	}

	if ($min <= 15 and $min >= 30) {
		echo 'Во вторую четверть.';
	}

	if ($min <= 31 and $min >= 45) {
		echo 'В третью четверть.';
	}

	if ($min >= 46 and $min <= 59) {
		echo 'В четвертую четверть.';
	}
?>

<?php
	$a = null;
	echo "<br>";
	if (!empty($a)) {
		echo "a is not empty";
	} else {
		echo "a empty";
	}

	$a = 1;
	echo "<br>";
	if (isset($a)) {
		echo "a is set";
	} else {
		echo "a is not set";
	}

	$num = 1;
	echo "<br>";
	switch ($num){
		case 1:
			$result = "Spring";
		break;
		case 2:
			$result = "Summer";
		break;
		case 3:
			$result = "Autumn";
		break;
		case 4:
			$result = "Winter";
		break;
	}	
	echo "<br>".$result;

	$day = 10;
	echo "<br>";
	if ($day >= 1 && $day <= 10) {
		echo "1 decade";
	}
	if ($day >= 11 && $day <= 20) {
		echo "2 decade";
	}
	if ($day >= 21 && $day <= 31) {
		echo "3 decade";
	}

	$month = 6;
	switch ($month) {
		case 1: $result = 'January';
	break;
	    case 2: $result = 'February';
	break;
		case 3: $result = 'March';
	break;
	    case 4: $result = 'April';
	break;
		case 5: $result = 'May';
	break;
	    case 6: $result = 'June';
	break;
		case 7: $result = 'July';
	break;
	    case 8: $result = 'August';
	break;
		case 9: $result = 'September';
	break;
	    case 10: $result = 'October';
	break;	
		case 11: $result = 'November';
	break;
	    case 12: $result = 'December';
	break;
	}
	echo "<br>";
	echo $result;
	
	$year= 2000;

	if ( (($year%4) == 0) && (($year%100) != 0) || (($year%400) == 0) ) {
			echo "<br> visokosniy";
		}
		else {
			echo "<br> ne visokosniy";
	
	}

	$d = "42345";

	if ($d[0] == '1' or $d[0] == '2' or $d[0] == '3') {
		echo "<br>Yes";
	} else {
		echo "<br>No";		
	}

	$d = "111112";

	if ($d[0] + $d[1] + $d[2] == $d[3] + $d[4] + $d[5]) {
		echo "<br>Yes";
	} else {
		echo "<br>No";		
	}
?>