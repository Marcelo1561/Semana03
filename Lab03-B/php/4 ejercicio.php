<?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$num3 = $_POST["num3"];

    $resultado = $num1 + $num2 + $num3;

    $promedio = $resultado / 3;

    if ($promedio >= 13) {
        echo "<p>APROBADO</p>";
    } else {
        echo "<p>DESAPROBADO</p>";
    }
		
?>