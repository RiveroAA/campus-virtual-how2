<!DOCTYPE html>
<html lang="es">

<head>
  <title>How2 - Inicio</title>
</head>
<body>
  <!-- Se incluye la barra de navegación del sitio -->
  <?php include("assets/includes/navbar.php") ?>

  <!-- Encabezado con clases de Bootstrap para diseño fluido -->
  <header class="container-fluid g-0">
    <!-- Carrusel de imágenes -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <!-- Indicadores de diapositivas del carrusel -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <!-- Imágenes y contenido del carrusel -->
      <div class="carousel-inner">
        <div class="carousel-item active bg-dark bg-gradient">
          <img src="assets/images/HomeSlideOne.jpg" class="d-block w-100" alt="..." style="opacity: 0.5">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="h2">How2 - Conectar con el aprendizaje</h5>
            <p><b>Te acompañamos en tu proceso.</b></p>
            <button class="btn btn-info" onclick="redireccionar()">Empezar</button>

<script>
    // Función JavaScript para redireccionar
    function redireccionar() {
        // Cambia la ubicación a la página a la que deseas redirigir
        window.location.href = "assets/auth/signup.html";
    }
</script>
          </div>
        </div>
        <div class="carousel-item bg-dark bg-gradient">
          <img src="assets/images/HomeSlideTwo.jpg" class="d-block w-100" alt="..." style="opacity: 0.5">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="h2">How2 - Estudiar sin límites</h5>
            <p><b>Conocé más acerca de How2 para alumnos.</b></p>
            <button class="btn btn-info">Info</button>
          </div>
        </div>
        <div class="carousel-item bg-dark bg-gradient">
          <img src="assets/images/HomeSlideThree.jpg" class="d-block w-100" alt="..." style="opacity: 0.5">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="h2">How2 - Conectá con el aprendizaje</h5>
            <p><b>Conocé más acerca de How2 para docentes.</b></p>
            <button class="btn btn-info">Info</button>
          </div>
        </div>
      </div>
      <!-- Controles para navegar el carrusel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <!-- Botón para retroceder -->
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <!-- Botón para avanzar -->
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </header>
  <!-- Sección de información sobre "¿Qué es How2?" -->
  <!-- Contenedor fluido con relleno -->
  <div class="container-fluid p-3">
    <!-- Contenedor con sombra -->
    <div class="container-fluid shadow-sm">
      <!-- Fila con columnas -->
      <div class="row">
        <div class="col-4 p-4">
          <!-- Columna con relleno -->
          <h2>¿Qué es How2?</h2>
          <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quo
            perferendis aut ipsum minus et libero quia magnam ipsa sunt, optio quas vitae esse sed nihil, quibusdam,
            voluptate dicta earum.</p>
        </div>
        <div class="col-8 rounded-end"
          style="background-size: cover; background-position: center; background-image: url('assets/images/HomeSlideOne.jpg');">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-3">
    <div class="container-fluid shadow-sm">
      <div class="row">
        <div class="col-8 rounded-start"
          style="background-size: cover; background-position: center; background-image: url('assets/images/HomeSlideTwo.jpg');">
        </div>
        <!-- Columna con imagen de fondo -->
        <div class="col-4 p-4">
          <h2>How2 para alumnos</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique consequuntur at quod temporibus suscipit
            expedita tempora, odit pariatur quasi autem sed corrupti voluptate alias impedit! Voluptatibus quia nam sunt
            quisquam!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-3">
    <div class="container-fluid shadow-sm">
      <div class="row">
        <!-- Columna con imagen de fondo -->
        <div class="col-4 p-4">
          <h2>How2 para docentes</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique consequuntur at quod temporibus suscipit
            expedita tempora, odit pariatur quasi autem sed corrupti voluptate alias impedit! Voluptatibus quia nam sunt
            quisquam!</p>
        </div>
        <div class="col-8 rounded-end"
          style="background-size: cover; background-position: top; background-image: url('assets/images/HomeSlideThree.jpg');">
        </div>
      </div>
    </div>
  </div>

  <!-- Se incluye el pie de página del sitio -->
  <?php include("assets/includes/footer.php") ?>
</body>

</html>