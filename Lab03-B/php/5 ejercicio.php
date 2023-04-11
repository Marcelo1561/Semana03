<?php
    $num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$num3 = $_POST["num3"];

if ($num1 > $num2) {
    if ($num1 > $num3) {
        echo "<p>El mayor de los tres numeros es: $num1</p>";
    } else {
        echo "<p>El mayor de los tres numeros es: $num3</p>";
    }
} else {
    if ($num2 > $num3) {
        echo "<p>El mayor de los tres numeros es: $num2</p>";
    } else {
        echo "<p>El mayor de los tres numeros es: $num3</p>";
    }
}
?>