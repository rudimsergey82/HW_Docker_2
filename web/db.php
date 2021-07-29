<?php
session_start();

$conn = mysqli_connect(
  'mysql',
  'crud',
  '123qwerty',
  'crud'
) or die(mysqli_error($mysqli));

?>