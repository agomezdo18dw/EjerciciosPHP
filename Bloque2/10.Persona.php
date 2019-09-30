<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/10.Personas</title>
    <style>
    </style>
</head>
<body>
    <p>Crea una clase persona con los atributos dni, nombre y apellido. Crea los correspondientes métodos de lectura y
    escritura para los atributos. Crea un método que devuelve el nombre completo de la persona “Persona: nombre apellido”. 
    Crea también un método constructor que reciba como argumentos los tres atributos.<br>
    Crea una clase User que herede de persona y añade un atributo puntos. Incluye los métodos getPuntos y setPuntos y
    sobreescribe el método que devuelve el nombre completo de la persona: “User: nombre apellido”. 
    Añade un método que indique un mensaje si el usuario tiene menos de 100 puntos.</p>
	<?php
        //Creamos la clase persona
    	class Persona {
            // Declaramos las propiedades
            private $nombre = '';
            private $apellido = '';
            private $dni = '';
            //Constructor
            public function __construct($nombre, $apellido, $dni) {
                $this->nombre = $nombre;
                $this->apellido = $apellido;
                $this->dni = $dni;
            }
            //Declaramos los métodos get y set
            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }
            public function getNombre() {
                echo $this->nombre;
            }
            public function setApellido($apellido) {
                $this->apellido = $apellido;
            }
            public function getApellido() {
                echo $this->apellido;
            }
            public function setDni($dni) {
                $this->dni = $dni;
            }
            public function getDni() {
                echo $this->dni;
            }
            //Mostramos los datos en pantalla
            public function mostrarDatos() {
                echo "Persona: ".$this->nombre." ".$this->apellido;
            }
        }
        //Creamos la clase user que se hereda de la clase Persona
        class User extends Persona {
            private $puntos = 0;
            //Declaramos los métodos get y set
            public function setPuntos($puntos) {
                $this->puntos = $puntos;
            }
            public function getPuntos() {
                echo $this->puntos;
            }
            //Mostramos los datos en pantalla
            public function mostrarDatos() {
                echo "User: ".$this->nombre." ".$this->apellido;
            }
            //Comprobamos los numeros
            public function Puntos() {
                if ($this->puntos < 100)
                    echo "Tienes menos de 100 puntos";
                else 
                    echo "Tienes 100 o mas puntos";
            }
        }  
	?>
</body>
</html>