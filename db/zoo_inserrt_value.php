<?php
$query = ["INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4)",
          "INSERT INTO cats VALUES(NULL, 'Cougar', 'Growler', 2)",
          "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)"];

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$rcount = count($query);

for ($j = 0 ; $j < $rcount; $j++)
{
  $result = $conn->query($query[$j]);
  if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error());
}
?>