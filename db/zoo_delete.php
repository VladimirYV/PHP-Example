<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "DELETE FROM cats WHERE name='Stumpy'";
$result = $conn->query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error());
?>