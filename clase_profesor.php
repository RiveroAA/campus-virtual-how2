<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tarjetas Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Inclusión del encabezado (navbar) desde un archivo PHP -->
    <?php include("assets/includes/navbar.php") ?>
    
    <!-- Boton que conecta con una funcion lo cual vuelve a la pagina que estaba antes -->
    <button onclick="goBack()" class="btn btn-danger">Volver</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <br>
    <br>

<div class="container">
    <center>
        <h2>Tablon Profesor</h2>
    </center>
    <br>
    <br>
    <div class="row">
        <!-- Tarjeta 1 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nueva Tarea</h5>
                    <p class="card-text">Crear nueva tarea y visualizarlas.</p>
                    <a href="CrearTarea.php" class="btn btn-primary">Crear</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nuevo Anuncio</h5>
                    <p class="card-text">Crear un anuncio para toda la clase y visualizarlas.</p>
                    <a href="comentario.php" class="btn btn-primary">Crear</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ver Tareas</h5>
                    <p class="card-text">visualizar las tareas.</p><br>
                    <a href="tareas_profesor.php" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 4 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bliblioteca</h5>
                    <p class="card-text">Contenidos para las clases</p><br>
                    <a href="#biblioteca" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Enlaces a los scripts de Bootstrap (jQuery y Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<!-- Enlace al JS de Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
