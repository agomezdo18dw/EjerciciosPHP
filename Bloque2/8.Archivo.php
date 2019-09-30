<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/7.Potencias</title>
    <style>
    </style>
</head>
<body>
    <p>Crea una función que comprueba la existencia de un archivo config.php. Debes lanzar una excepción en caso de que no exista.</p>
	<?php
        //Funcion que comprueba si existe el archivo y sino lanza una excepcion
        function existeArch($nombre){
            if(!file_exists('"'.$nombre.'"'))
                throw new exception('El archivo "'.$nombre.'" no ha sido encontrado');
        }
        //Llamada a la funcion
        existeArch("config.php");
	?>
</body>
</html>