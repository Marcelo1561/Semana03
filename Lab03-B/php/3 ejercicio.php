<?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

  if ($num1 == 0 && $num2 == 0) {
    echo "<p>Error: el segundo número no puede ser cero.</p>";
  } else {
    if ($num1 > $num2) {
      $suma = $num1 + $num2;
      $resta = $num1 - $num2;

      echo "<p>La suma de los dos números es: $suma</p>";
      echo "<p>La resta entre los dos números es: $resta</p>";
    } else {
      $producto = $num1 * $num2;
      $division = $num1 / $num2;

      echo "<p>El producto de los dos números es: $producto</p>";
      echo "<p>La división del primer número respecto al segundo es: $division</p>";
    }
  }
		
?>