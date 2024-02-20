<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_proyect'
) or die(mysqli_erro($mysqli));

?>
