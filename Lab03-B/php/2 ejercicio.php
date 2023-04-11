<?php
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];
  $num4 = $_POST['num4'];

  $suma = $num1 + $num2;
  $producto = $num3 * $num4;

  echo "<p>La suma de los dos primeros números es: $suma</p>";
  echo "<p>El producto del tercer y cuarto número es: $producto</p>";
?>