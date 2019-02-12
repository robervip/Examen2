<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["idJugador"];
  $resultado = $conexion->query("SELECT * FROM jugador WHERE equipo=".$id);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
      </ul>
    </nav>

  </head>
  <body>
    <table border=1 cellpadding=4 cellspacing=0>
      <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Posicion</td>
        <td>Id Capitan</td>
        <td>Fecha Alta</td>
        <td>Salario</td>
        <td>Equipo</td>
        <td>Altura</td>
      </tr>
      <?php
     foreach ($resultado as $jugador) {
       echo "<tr>";
        echo "<td>".$jugador['id_jugador']."</td>";
        echo "<td>".$jugador['nombre']."</td>";
        echo "<td>".$jugador['apellido']."</td>";
        echo "<td>".$jugador['posicion']."</td>";
        echo "<td>".$jugador['id_capitan']."</td>";
        echo "<td>".$jugador['fecha_alta']."</td>";
        echo "<td>".$jugador['salario']."</td>";
        echo "<td>".$jugador['equipo']."</td>";
        echo "<td>".$jugador['altura']."</td>";
       echo "</tr>";
     }
   ?>
    </table>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
