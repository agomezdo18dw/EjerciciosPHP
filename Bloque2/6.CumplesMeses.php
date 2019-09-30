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
    <h2>Añadir persona</h2>
    <p>(Primero poner nombre y lego poner mes, meses con la primera letra mayuscula)</p>
    <form action="" method="get">
		<input type="string" name="nombre">
		<input type="string" name="mes">
		<input type="submit">
	</form>
    <br>
	<?php
        //Creamos array de cumples
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
            "Noviembre" => ["Aaron", "Enrique"],
            "Diciembre" => ["Anano","Josu"]
        ];
        //Añadimos a el nombre nuevo en en el mes correspondiente
        $meses = añadirCumple($_GET['nombre'], $_GET['mes'], $meses);
        //Mostramos el array de los meses con los cumples en forma de lista
        echo "Cumpleaños: <br>";
        foreach ($meses as $mes => $nombres) {
            echo "<font style='color: blue'>$mes</font><ul>";
            foreach ($nombres as $nombre) {
                echo "<li>$nombre</li>";
            }
            echo '</ul>';
        }	
        //Funcion que añade al array de meses un nuevo cumple
        function añadirCumple($nombre, $mes, $meses){
            array_push($meses[$mes], $nombre);
            echo "Tras añadir a $nombre en el mes de $mes<br>";
            return $meses;	
        }
	?>
</body>
</html>