<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/5.Palindromas</title>
</head>
<body>
    <p>Dado una palabra indica si es palindromo. Un palíndromo es una 
    palabra o frase que se lee igual de izquierda a derecha que de 
    derecha a izquierda.</p>
	<?php
    $cadena = "alli ves sevilla";
    echo "La frase: $cadena";
    $separar = explode(" ", strtolower($cadena));

    foreach($separar as $palabra) {
        trim($palabra);
        $nuevo .= $palabra; 
    }

    if($nuevo == strrev($nuevo)) {
        echo "Si es palindroma";
    }
    else {
        echo "No es palindroma";
    }
	?>
</body>
</html>