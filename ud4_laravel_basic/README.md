# ud4_laravel_basic
## Crea un repositorio github para esta unidad.   
### Realizar en éste proyecto las siguientes tareas:

Modifica la vista principal (o crea una nueva) de tal manera que vayas añadiendo los enlaces correspondientes a cada ejercicio.
Todas tareas tienen que estar disponibles al mismo tiempo.

**Tarea 4.1 Rutas y Vistas**
* a) Crea una ruta (contacto) para acceder a tus datos personales.
* b) Crea una ruta (blog) que reciba como parámetro un identificador y muestre en la vista "Este es el artículo numero 'identificador'.
* c) Crea una ruta (blog) que reciba dos parámetros, un identificador y un nombre, y muestre en la vista "Este es el artículo número 'identificador' de 'nombre'. Restringe el formato de los parámetros de tal manera que identificador sea numerico y nombre contenga caracteres de la a-z/A-Z. 

**TAREA 4.2 Rutas Vista Controlador**

Crea un controlador 'SaludoController' para implementar:
* a) Crea una ruta (saludo) y asignale un nombre, que devuelve en la vista correspondiente "Kaixo!".
* b) Crea una ruta (saludo) y asignale un nombre, que reciba como parametro un nombre y que devuelve en la vista correspondiente "Kaixo *nombre*!".
* c) Crea una ruta (saludo) y asignale un nombre, que reciba dos parámetros: un nombre y un color (hexadecimal) que devuelve en la vista correspondiente "Kaixo *nombre*!" en el color indicado. Así mismo el segundo parámetro será *opcional*, en caso de no indicarse, será 'anónimo'.

**TAREA 4.3 Formularios**
* a) Crea un formulario de contacto (nombre, apellido) con el método GET y muestra los datos introducidos en la vista creada en el punto anterior de tal manera que se muestre "Kaixo *nombre* *apellido*!".
* b) Crea un fichero json con saludos en diferentes idiomas. Crea un formulario de contacto (nombre, apellido) con el método POST y muestra en una vista saludos al nombre introducido en dichos idiomas.
* c) Modifica (duplica) el ejercicio anterior de tal manera que el formulario y los saludos se muestren en la misma vista.

**TAREA 4.4 Formularios con validación**
* a) Crea un formulario de usuario con los siguientes campos: nombre, apellido, email, teléfono.
Realiza las siguientes validaciones (todos los campos son obligatorios salvo teléfono):
    - nombre: string de entre 2 y 15 caracteres
    - nombre: string de entre 2 y 20 caracteres
    - email: formato correcto 
    - teléfono: 6xxxxxxxx y 7xxxxxxxx
Si se introducen los datos correctamente deberá mostralos en una vista, en caso contrario deberá indicar que dato(s) no son correctos. 

