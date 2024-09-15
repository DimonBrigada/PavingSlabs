<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Добавление товара</title>
<link rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
</head>
<body>
  <div class="aftor">
<form action="newart.php" method="post">

<p>Название товара:</p>
<input name="nameart">

<p>Ссылка на картинку:</p>
<input name="url">

<p>Размер:</p>
<input name="size">

<p>Цена:</p>
<input name="price">

<input type="submit" value="Добавить товар">
</form>
<a class="button" href="/pages/catalog.php">В раздел каталог</a>
</div>
</body>
</html>
<script> 
var form = document.querySelector('form');
form.onsubmit = function ()
  {
  var text = form.text;
  text.value = '<p>' + text.value + '</p>';
  text.value = text.value.replace(/\n/g, '</p><p>');
  };
 </script> 