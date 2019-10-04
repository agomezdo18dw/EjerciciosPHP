<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Agenda</title>
    <style>
        body {
            margin: 0 auto;
            width: max-content;
        }
        #fieldset {
            width: 700px;
            margin-top: 3%;
        }
        
    </style>
</head>
<body>
    <fieldset id="fieldset">
        <legend>Añadir contacto</legend>
        <form action="" method="post">
		    <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="email"  placeholder="Email">
		    <input type="submit" value="Añadir a agenda">
	    </form>
    </fieldset>
	<?php
    /*
     *Author: Adrián Gómez
     */
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contactos = ['Numero de contacto' => ['Nombre', 'Email']];
    
    function añadirContacto($nombre, $email, $contactos) {
        
    }

    function mostrarInformacion(){

    }
    //Funciones extra que he utilizado para gestionar la agenda

			function stringtoarray ($string_agenda,&$array_agenda) {
				//Convierte la agenda de datos (string) en un array asociativo
				$a=explode (";",$string_agenda);
				for($i=0; $i<count($a); $i++) {
					$array_agenda[$a[$i]]=$a[$i+1];
					$i++;
				}
				return true;
			}

			function arraytostring ($array_agenda) {
				//Convierte el array asociativo en una cadena de caracteres cada elemento separado por ;
				foreach($array_agenda as $key_nombre => $value)
				{
				  $string_agenda.=$key_nombre.";".$value.";";
				}
				//Quitamos el ultimo ';''
				$string_agenda=substr($string_agenda, 0, -1);
				return $string_agenda;
			}
    añadirContacto($nombre, $email, $contactos);
	?>
</body>
</html>