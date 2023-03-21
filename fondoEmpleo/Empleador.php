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
        include_once 'db.php';

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
        ?>

    </div>

    <!-- Incluye los archivos JS de jQuery, Bootstrap 5 y DataTables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Inicializa la DataTable con las opciones de configuración
            $('#myTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>