<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Tareas y Comentarios</title>
  <!-- Enlace a Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Conecta con navbar.php donde está la barra de navegación -->
<?php include("assets/includes/navbar.php") ?>

<br>
<button onclick="goBack()" class="btn btn-danger">Volver</button>
<br>
    <center>
        <h2>Tareas</h2>
    </center>

<script>
    function goBack() {
      window.history.back();
    }
</script>

<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Aquí se mostrarán las tareas y comentarios -->
            <?php
            // Establece la conexión con la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tarea_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Obtener las tareas y comentarios de la base de datos
            $sql_obtener_datos = "SELECT tarea_texto, comentario_texto FROM tareas 
                                    LEFT JOIN comentarios ON tareas.id = comentarios.tarea_id 
                                    ORDER BY comentarios.fecha_creacion DESC";

            $result = $conn->query($sql_obtener_datos);

            if ($result->num_rows > 0) {
                // Mostrar los datos en formato HTML
                echo '<div class="list-group">';
                while ($row = $result->fetch_assoc()) {
                    echo '<a href="#" class="list-group-item list-group-item-action">';
                    echo '<h5 class="mb-1">' . $row['tarea_texto'] . '</h5>';
                    echo '<p class="mb-1">' . $row['comentario_texto'] . '</p>';
                    echo '</a>';
                }
                echo '</div>';
            } else {
                echo "No hay datos";
            }

            $conn->close();
            ?>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS y jQuery (necesarios para algunos componentes de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
