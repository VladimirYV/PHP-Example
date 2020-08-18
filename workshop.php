<?php
printf("<span style='color:#%X%X%X'>Привет</span>", 65, 127, 245);



echo "<pre>"; // Тег, позволяющий отображать все пустые пространства
// Дополнение пробелами до 15 знако-мест
printf("Результат равен $%15f\n", 123.42 / 12);
// Дополнение нулями до 15 знако-мест
printf("Результат равен $%015f\n", 123.42 / 12);
// Дополнение пробелами до 15 знако-мест и вывод с точностью до двух
// десятичных знаков
printf("Результат равен $%15.2f\n", 123.42 / 12);
// Дополнение нулями до 15 знако-мест и вывод с точностью до двух
// десятичных знаков
printf("Результат равен $%015.2f\n", 123.42 / 12);
// Дополнение символами # до 15 знако-мест и вывод с точностью до двух десятичных знаков
printf("Результат равен $%'#15.2f\n", 123.42 / 12);


echo "<pre>"; // Тег, позволяющий отображать все пустые пространства
$h = 'Rasmus';
printf("[%s]\n", $h); // Стандартный вывод строки
printf("[%12s]\n", $h); // Выравнивание пробелами по правому краю до ширины 12
printf("[%-12s]\n", $h); // Выравнивание пробелами по левому краю
printf("[%012s]\n", $h); // Дополнение нулями
printf("[%'#12s]\n\n", $h); // Использование специально выбранного
// символа дополнения '#'
$d = 'Rasmus Lerdorf';
printf("[%12.8s]\n", $d); // Выравнивание по правому краю с усечением
// до 8 символов
printf("[%-12.12s]\n", $d); // Выравнивание по левому краю с усечением
// до 12 символов
printf("[%-'@12.10s]\n", $d); // Выравнивание по левому краю, дополнение
// символом '@', усечение до 10 символов

$out = sprintf("Результат: $%.2f", 123.42 / 12);
echo $out;
echo "<br>";


echo mktime(12, 43, 59, 1);
echo "<br>";

echo date('Y'); //вернет '2013'
echo "<br>";
echo date('y'); //вернет '13'
echo "<br>";
echo date('m'); //вернет '06' - номер месяца
echo "<br>";
echo date('d'); //вернет '01' - номер дня в месяце
echo "<br>";
echo date('j'); //вернет '1' - номер дня в месяце (без нуля спереди)
echo "<br>";
echo date('w'); //вернет '1' - понедельник
echo "<br>";
echo date('H'); //вернет '12' - часы
echo "<br>";
echo date('i'); //вернет '23' - минуты
echo "<br>";
echo date('s'); //вернет '59' - секунды
echo "<br>";
echo date('d-m-Y'); //вернет '01-06-2013'
echo "<br>";
echo date('d.m.Y'); //вернет '01.06.2013'
echo "<br>";
echo date('H:i:s d.m.Y'); //вернет '12:23:59 01.06.2013'
echo "<br>";
echo date("l F jS, Y - g:ia", time());
echo "<br>";
$date = date_create('2025-12-31');
date_modify($date, '1 day');
echo date_format($date, 'd.m.Y');
echo "<br>";

$month = 9; // Сентябрь (в котором только 30 дней)
$day = 30; // 31-е
$year = 2018; // 2018
if (checkdate($month, $day, $year)) echo "Допустимая дата";
else echo "Недопустимая дата";

$fh = fopen("testfile.txt", 'w') or die ("<br>Создать файл не удалось");
$text = <<<_END
String 1
String 2
String 3

_END;
fwrite($fh, $text) or  die ("<br>Сбой записи файла");
fclose($fh);
echo "<br>Файл 'testfile.txt успешно записан";


$fh = fopen("testfile.txt", 'r') or
die("Файл не существует или вы не обладаете правами на его открытие");

while($line = fgets($fh))
{
  echo "<br>".$line;
}
fclose($fh);

copy('testfile.txt', 'testfile2.txt') or die("Копирование невозможно");
echo "Файл успешно скопирован в 'testfile2.txt'";
echo "<br>";
if (!rename('testfile2.txt', 'testfile2.new'))
echo "Переименование невозможно";
else echo "Файл успешно переименован в 'testfile2.new'";
echo "<br>";
if (!unlink('testfile2.new')) echo "Удаление невозможно ";
else echo "Файл 'testfile2.new' удален успешно";

echo "<br>";

$fh = fopen("testfile.txt", 'r+') or die("Сбой открытия файла");
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Сбой записи в файл");
fclose($fh);
echo "<br>";
echo "Файл 'testfile.txt' успешно обновлен";
echo "<br>";
echo "<pre>"; // Тег, позволяющий отображать переводы строк
echo file_get_contents("testfile.txt");
echo "</pre>"; // Прекращение действия тега pre
echo "<br>";
// echo file_get_contents("http://oreilly.com");



$arr = [1, 2, 3, 4, 5];

last($arr);

function last($arr)
{
  echo array_pop($arr).'<br>'; //выводим последний элемент массива
  
  if(!empty($arr)) {
    last($arr); //это рекурсия
  }
}


?>

