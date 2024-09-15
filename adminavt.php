<?php
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'plitka' && $pas == plitka)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  }
else
$script = 'avtadministrator.html';
header("Location: $script");
?>