<?php
require_once 'login.php';
$conn=new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM classics";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;
echo $rows;

for ($j = 0 ; $j < $rows ; $j++)
{
  $result->data_seek($J);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  echo 'Author: ' .  $row['author'] . '<br>';
  echo 'Title: ' .  $row['title'] . '<br>';
  echo 'Category: ' .  $row['category'] . '<br>';
  echo 'Year: ' .  $row['year'] . '<br>';
  echo 'ISBN: ' .  $row['isbn'] . '<br>';
}

echo "<br><br>";
for ($j = 0 ; $j < $rows ; $j++)
{
  $result->data_seek($J);
  $row = $result->fetch_row();
  echo 'Author: ' .  $row[0] . '<br>';
  echo 'Title: ' .  $row[0] . '<br>';
  echo 'Category: ' .  $row[2] . '<br>';
  echo 'Year: ' .  $row[3] . '<br>';
  echo 'ISBN: ' .  $row[4] . '<br>';
}
$result->close();
$conn->close();

?>