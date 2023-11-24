<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con Comentarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
        <h2>Deja un Comentario</h2>
        <form id="comentarioForm" action="guardar_comentario.php" method="POST">
            <div class="form-group">
                <label for="comentario">Comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="Escribe tu comentario aquí"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Comentario</button>
        </form>
        
        <div class="mt-5" id="comentariosContainer">
            <!-- Aquí se mostrarán los comentarios -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        // Cargar comentarios al cargar la página
        cargarComentarios();

        // Manejar envío del formulario y recargar los comentarios
        $('#comentarioForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'guardar_comentario.php',
                data: $(this).serialize(),
                success: function(){
                    cargarComentarios();
                    $('#comentario').val(''); // Limpiar campo de comentario después de enviar
                }
            });
        });
    });

    // Función para cargar comentarios
    function cargarComentarios() {
        $.ajax({
            type: 'GET',
            url: 'obtener_comentarios.php',
            success: function(data){
                var comentariosArray = data.split('\n').filter(function(comment) {
                    return comment.trim() !== '';
                });

                // Generar cajas de texto para cada comentario
                var comentariosHTML = '';
                comentariosArray.forEach(function(comment) {
                    comentariosHTML += '<div class="border p-2 mb-3">' + comment + '</div>';
                });

                $('#comentariosContainer').html(comentariosHTML);
            }
        });
    }
</script>

</body>
</html>
