<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarea_db";

    // Obtener el comentario del formulario
    $comentario = $_POST['comentario'] ?? '';

    // Crear conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta para insertar el comentario en la tabla 'descripcion'
    $sql = "INSERT INTO descripcion (comentario) VALUES ('$comentario')";

    if ($conn->query($sql) === TRUE) {
        // Obtener todos los comentarios actualizados después de agregar uno nuevo
        $sql = "SELECT comentario FROM descripcion ORDER BY fecha_envio DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Construir la lista de comentarios para enviar de vuelta a la página
            $comentarios = array();
            while ($row = $result->fetch_assoc()) {
                $comentarios[] = $row['comentario'];
            }
            echo implode("\n", $comentarios); // Enviar los comentarios separados por saltos de línea
        } else {
            echo "No hay comentarios.";
        }
    } else {
        echo "Error al guardar el comentario: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
