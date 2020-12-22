<?php // formtest2.php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Не введено)";
echo <<<_END
<html>
<head>
<title>Form Test</title>
</head>
<body>
Вас зовут: $name<br>
<form method="post" action="formtest2.php">
Как Вас зовут?
<input type="text" name="name" value="Как вас величать"><br>
<textarea name="commit" cols="50" rows="5" wrap="soft">
Пишите здесь...
</textarea><br>
Я согласен <input type="checkbox" name="agree" checked><br>
<label>8.00-12.00<input type="radio" name="time" value="1"></label><br>
<label>12.00-16.00<input type="radio" name="time" value="2" checked="checked"></label><br>
<label>16.00-20.00<input type="radio" name="time" value="3"></label><br>
Овощи <select name="veg" size="1">
<option value="Горох">Горох</option>
<option value="Фасоль">Фасоль</option>
<option value="Морковь">Морковь</option>
<option value="Капуста">Капуста</option>
<option value="Брокколи">Брокколи</option>
</select>
<input type="submit">
<input type="image" name="submit" src="image.gif">
</form>
</body>
</html>
_END;
?>