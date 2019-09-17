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
    $cadena2 = "Hola me llamo federico";
    echo "<p><b>Primera frase:</b> $cadena</p>
          <p><b>Segunda frase:</b> $cadena2</p>";
    $separar = explode(" ", strtolower($cadena));
    $separar2 = explode(" ", strtolower($cadena2));

    foreach($separar as $palabra) {
        trim($palabra);
        $nuevo .= $palabra; 
    }
    if($nuevo == strrev($nuevo)) {
        echo "<p>La primera frase si es palindroma</p>";
    }
    else {
        echo "<p>La primera frase no es palindroma</p>";
    }
    foreach($separar2 as $palabra2) {
        trim($palabra2);
        $nuevo .= $palabra2; 
    }
    if($nuevo == strrev($nuevo)) {
        echo "<p>La segunda frase si es palindroma</p>";
    }
    else {
        echo "<p>La segunda frase no es palindroma</p>";
    }
	?>
</body>
</html>