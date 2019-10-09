<!DOCTYPE html>
<html>
<head>
  <title>UD2 - Suscripción boletín</title>
</head>
<body>
  <h1>Suscripción electrónica a  boletín.</h1>
  <p>EJERCICIO: Implementa la página mostrardatos.php donde aparecerán los datos introducidos por el usuario.</p>
  <form action="mostrarDatos.php" method="post"/>

    <div id="nombre">
      Nombre: <input type="text" name="nombre"><br><br>
      Apellidos: <input type="text" name="apellidos" size="40"><br><br>
      e-mail: <input type="text" name="email" size="35"><br><br>
      Fecha de cumpleaños:
      <input type="date" name="bdaytime"><br><br>
      Contraseña: <input type="password" name="contras"><br><br>
    </div>

    <div id="foto">
      Selecciona tu foto: <input type="file" name="myFile"><br><br>
    </div>

    <div id="ciclo">
      Ciclo<br>
      <input type="radio" name="ciclo" value="DAW" checked="checked">
       Desarrollo de aplicaciones web<br>
      <input type="radio" name="ciclo" value="ASIR"/>
       Administracion de servicios informáticos en red<br>
      <input type="radio" name="ciclo" value="SMR"/>
       Sistemas microinformáticos y redes<br><br>
    </div>

    <div id="interes">
      Interesado en los siguientes lenguajes: <br>
      <input type="checkbox" name="python"/> Python<br>
      <input type="checkbox" name="java"/> Java<br>
      <input type="checkbox" name="php"/> PHP<br>
      <input type="checkbox" name="js"/> Javascript<br>
      <input type="checkbox" name="ruby"/> Ruby<br>
      <input type="checkbox" name="c"/> C#<br><br>
    </div>

    <div id="dia">
      Día de la semana que le interesa recibirlo:<br>
      <select name="dia">
          <option>Día de la semana:</option>
          <option value="lunes">Lunes</option>
          <option value="martes">Martes</option>
          <option value="miercoles">Miércoles</option>
          <option value="jueves">Jueves</option>
          <option value="viernes">Viernes</option>
          <option value="sabado">Sábado</option>
          <option value="domingo">Domingo</option>
      </select><br><br>
    </div>

    <div id="color">
      Elige tu color favorito:
      <input type="color" name="color"><br><br>
    </div>

    <div id="comentario">
      Su opinión: <br>
      <textarea name="comentario" rows="5" cols="50" placeholder="Escribe un comentario"></textarea><br><br>
    </div>

    <input type="submit" value="Enviar datos">
    <input type="reset" value="Reset">
  </form>
</body>
</html>
