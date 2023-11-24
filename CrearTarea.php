<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Tarea y Comentario</title>
  <!-- Enlace a Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .message-box {
      height: 300px;
      overflow-y: scroll;
    }
  </style>
</head>
<body>

<!--Conecta con navbar.php donde esta la barra de navegacion-->
<?php include("assets/includes/navbar.php") ?>
<br>
<button onclick="goBack()" class="btn btn-danger">Volver</button>

    <script>
        function goBack() {
          window.history.back();
        }
    </script>
    <br>
    <br>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="txtTarea">Crear Tarea</label>
            <input type="text" class="form-control" id="txtTarea" name="txtTarea" placeholder="Escribe tu tarea aquí">
          </div>
          <div class="form-group">
              <label for="txtComentario">Descripcion</label>
              <input type="text" class="form-control" id="txtComentario" name="txtComentario" placeholder="Escribe tu comentario aquí">
            </div>
          <div class="form-group">
            <label for="fileArchivo">Seleccionar Archivo</label>
            <input type="file" class="form-control-file" id="fileArchivo" name="fileArchivo">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div class="mt-4 message-box" id="messageBox">
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

          // Verifica si se ha enviado el formulario
          if (isset($_POST['submit'])) {
              // Obtiene los datos del formulario
              $tarea = $_POST['txtTarea'];
              $comentario = $_POST['txtComentario'];

              // Procesa el archivo cargado (en este caso, simplemente se guarda el nombre del archivo)
              $archivo_nombre = $_FILES['fileArchivo']['name'];

              // Inserta la tarea y comentario en la base de datos
              $sql_tarea = "INSERT INTO tareas (tarea_texto) VALUES ('$tarea')";
              if ($conn->query($sql_tarea) !== TRUE) {
                  echo "Error al guardar la tarea: " . $conn->error;
              }

              $last_insert_id = $conn->insert_id;

              $sql_comentario = "INSERT INTO comentarios (comentario_texto, archivo_nombre, tarea_id) VALUES ('$comentario', '$archivo_nombre', '$last_insert_id')";
              if ($conn->query($sql_comentario) !== TRUE) {
                  echo "Error al guardar el comentario: " . $conn->error;
              }

              // Redireccionar para actualizar la página y mostrar los datos actualizados
              header("Location: {$_SERVER['PHP_SELF']}");
              exit();
          }

          // Obtener los comentarios y tareas de la base de datos
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
  </div>

  <!-- Enlace a Bootstrap JS y jQuery (necesarios para algunos componentes de Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
