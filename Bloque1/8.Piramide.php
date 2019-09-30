<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/8.Piramide</title>
</head>
<body>
    <p>Implementa el código que dada una variable ‘base’ que tiene
    que ser impar.</p>
	<?php
    $base = rand(0, 30);
    while ($base % 2 == 0)
        $base = rand(0, 30);
    echo "<b>La base tiene:</b> $base asteriscos<br><br>";

    $centro = floor($base/2);
    for ($i = 1; $i <= $base; $i = $i + 2){
        for ($j = 1; $j <= $centro; $j = $j + 1)
            echo "&nbsp;";
        for ($j = 1; $j <= $i; $j = $j + 1)
            echo "*";
        echo "<br>";
        $centro = $centro -1;
    }
	?>
</body>
</html>