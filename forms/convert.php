<?php // convert.php
$f = $c = '';
if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);
if ($f != '')
{
$c = intval((5 / 9) * ($f - 32));
$out = "$f °f равно $c °c";
}
elseif($c != '')
{
$f = intval((9 / 5) * $c + 32);
$out = "$c °c равно $f °f";
}
else $out = "";
echo <<<_END
<html>
<head>
<title>Программа перевода температуры</title>
</head>
<body>
<pre>
Введите температуру по Фаренгейту или по Цельсию
и нажмите кнопку Перевести
<b>$out</b>
<form method="post" action="convert.php">
По Фаренгейту <input type="text" name="f" size="7" autocomplete='on' autofocus='autofocus' placeholder='F' required='required'>
По цельсию <input type="text" name="c" size="7" autocomplete='on'>
<input type="submit" value="Перевести">
</form>
</pre>
</body>
</html>
_END;
function sanitizeString($var)
{
$var = stripslashes($var);
$var = strip_tags($var);
$var = htmlentities($var);
return $var;
}
?>

<form action='myscript.php' method='post' id='form1'>
</form>
<input type='text' name='username' form='form1'>
<br>
Выберите нужный сайт:
<input type='url' name='site' list='links'>
<datalist id='links'>
<option label='Google' value='http://google.com'>
<option label='Yahoo!' value='http://yahoo.com'>
<option label='Bing' value='http://bing.com'>
<option label='Ask' value='http://ask.com'>
</datalist><br>
Выберите цвет <input type='color' name='color'><br>
<input type='time' name='meeting' value='12:00'
min='09:00' max='16:00' step='3600'><br>
<input type='number' name='age'>
<input type='range' name='num' min='0' max='100' value='50' step='1'>
<input type='time' name='time' value='12:34'>