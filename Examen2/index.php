<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
  if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else{
    $resultado = $conexion->query("SELECT * FROM partido");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <nav>
      <ul>
      </ul>
    </nav>
  <body>
    <table border=1 cellpadding=4 cellspacing=0>
      <tr>
        <td>ID</td>
        <td>Local</td>
        <td>Visitante</td>
        <td>Resultado</td>
      </tr>
      <?php
        foreach ($resultado as $partido) {
          echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td><a href='equipo.php?idEquipo=".$partido['local']."'>".$partido['local']."</a></td>";
            echo "<td><a href='equipo.php?idEquipo=".$partido['visitante']."'>".$partido['visitante']."</a></td>";
            echo "<td>".$partido['resultado']."</td>";
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
