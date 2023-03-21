<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hrplus portal de empleo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>

  </head>
  <body>
    <div>
        <center><img src="img/fondoEmpleo.jpg"></center>
    </div><br><br>

    <div class="container">
      <center><h1>Tabla de los canditados que buscan empleo</h1></center><br>

        <?php
        // Conecta con la base de datos y obtiene los datos de la tabla
        /*include_once 'db.php';

        $result = mysqli_query($conn, "SELECT * FROM usuarios");

        // Crea la tabla HTML con los encabezados y el cuerpo de la tabla
        echo "<table id='myTable' class='table table-striped table-bordered'>";
        echo "<thead><tr><th>ID</th><th>Nombre</th><th>Correo</th></tr></thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        // Cierra la conexión
        mysqli_close($conn);
        */?>



      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cédula</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Correo</th>
            <th scope="col">Dirección de residencia</th>
            <th scope="col">Perfil o cargo</th>
            <th scope="col">Sobre mi</th>
            <th scope="col">Nombre de la última empresa</th>
            <th scope="col">Funciones</th>
            <th scope="col">Nombre de la penúltima empresa</th>
            <th scope="col">Funciones</th>
            <th scope="col">Nombre de la antepenúltima empresa</th>
            <th scope="col">Funciones</th>
            <th scope="col">Nombre de la última institución</th>
            <th scope="col">Título obtenido</th>
            <th scope="col">Nombre de la penúltima institución</th>
            <th scope="col">Título obtenido</th>
            <th scope="col">Nombre de la antepenúltima institución</th>
            <th scope="col">Título obtenido</th>
            <th scope="col">Idioma nativo</th>
            <th scope="col">Primer idioma extrangero</th>
            <th scope="col">Segundo idioma extrangero</th>
            <th scope="col">Conocimientos</th>
            <th scope="col">Intereses</th>
            <th scope="col">Habilidades</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once 'db.php';

          $result = mysqli_query($conn, "SELECT * FROM candidatos");
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['cedula'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['perfil'] . "</td>";
            echo "<td>" . $row['sobreMi'] . "</td>";
            echo "<td>" . $row['nEU'] . "</td>";
            echo "<td>" . $row['fEU'] . "</td>";
            echo "<td>" . $row['nEP'] . "</td>";
            echo "<td>" . $row['fEP'] . "</td>";
            echo "<td>" . $row['nEA'] . "</td>";
            echo "<td>" . $row['fEA'] . "</td>";
            echo "<td>" . $row['nIU'] . "</td>";
            echo "<td>" . $row['tIU'] . "</td>";
            echo "<td>" . $row['nIP'] . "</td>";
            echo "<td>" . $row['tIP'] . "</td>";
            echo "<td>" . $row['nIA'] . "</td>";
            echo "<td>" . $row['tIA'] . "</td>";
            echo "<td>" . $row['idiomaN'] . "</td>";
            echo "<td>" . $row['idiomaEP'] . "</td>";
            echo "<td>" . $row['idiomaES'] . "</td>";
            echo "<td>" . $row['conocimientos'] . "</td>";
            echo "<td>" . $row['intereses'] . "</td>";
            echo "<td>" . $row['habilidades'] . "</td>";
            echo "</tr>";
          }
          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>

    <!-- Incluye los archivos JS de jQuery, Bootstrap 5 y DataTables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script type="text/javascript">
        /*$(document).ready(function() {
            // Inicializa la DataTable con las opciones de configuración
            $('#myTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });*/
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>