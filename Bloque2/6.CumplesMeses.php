<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/6.CumplesMeses</title>
    <style>
    </style>
</head>
<body>
    <p>Almacena en un array los nombres de las personas que cumplen los años en un mes determinado (para cada mes del año). 
    Crea una función para añadir un nombre a un mes. Ésta función deberá además devolver en un parámetro el número de 
    personas que están registradas.<br>
    Enero: Mikel, Ainara, Xabi<br>
    Febrero: Irati, Ibai<br>
    Marzo: Haizea<br>
    ...<br>
    Recorre el array y muestra cada nombre por separado. Muestra los nombres de los meses en otro color 
    (también puedes mostrar el resultado en una tabla).<br>
    Ejemplo:<br>
    <font style='color: Blue'>Enero</font><br>
    Mikel<br>
    Ainara<br>
    Xabi</p>
	<?php
    	$meses = [
            "Enero" => ["Manex", "Laura", "Eneko"],
            "Febrero" => ["Godofredo","Matias"],
            "Marzo" => ["Carlos", "Andres"],
            "Abril" => ["David","Nerea","Jefry"],
            "Mayo" => ["Jon","Ander"],
            "Junio" => ["Arantxa","Iñigo"],
            "Julio" => ["Iñaki", "Alex"],
            "Agosto" => ["Leire","Raquel","Maitane"],
            "Septiembre" => ["Adrian","Pablo","Lorena"],
            "Octubre" => ["Mikel","Aitor","Mertxe"],
            "Noviembre" => ["Aaron", "Iñako"],
            "Diciembre" => ["Anano","Josu"]
        ];
    
	?>
</body>
</html>