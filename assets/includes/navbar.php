<?php
// include("../php/libraries/database_conn.php");
session_start();
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	</head>
	<body>
		<div class="container-fluid g-0 sticky-top">
			<div class="row g-0">
				<nav class="navbar navbar-expand-md bg-light">
					<div class="container-fluid">
						
						<div class="col-6 col-md-4">
							<a class="navbar-brand" href="#">How2</a>
						</div>
						
						<div class="col-6 col-md-4 offset-md-3">
							<button class="navbar-toggler float-end col-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse row" id="navbarSupportedContent">
								<ul class="navbar-nav">
									
									<!-- 
									LOS BOTONES DE LA NAVBAR SE SACAN Y PONEN EN BASE A CONSULTAS SQL, 
									SEGUN QUE TIPO DE CUENTA ES, O SI ESTÁ LOGEADO
									-->

									<div class="col-3">
										<li class="nav-item">
											<a class="nav-link" href="../../">Inicio</a>
										</li>
									</div>
									<div class="col-3">
										<li class="nav-item">
											<a class="nav-link" href="#">Materias</a>
										</li>
									</div>
									<!-- <div class="col-3">
										<li class="nav-item">
											<a class="nav-link" href="#">Menu</a>
										</li>
									</div> -->
									<div class="col-3">
										<li class="nav-item">
											<a class="nav-link" href="#">Contacto</a>
										</li>
									</div>
									<div class="col-3">
										<li class="nav-item">
										<button type="button" class="btn bi-person-fill" data-bs-toggle="modal" data-bs-target="#profileModal">
										</button>
										</li>
									</div>
								
								</ul>
							</div>


						</div>
				
					</div>
				</nav>
			</div>
		</div>

		<div class="modal fade m-0" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
			<div class="modal-dialog position-sticky h-100 m-0 w-25 float-end">
				<div class="modal-content h-100 rounded-0 m-0 w-100 p-1">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					<div class="modal-body">
						<div class="row align-items-start">
							<div class="col-6">
							<img src="assets/images/DefaultUser.png" alt="UserPhoto" class="img-thumbnail rounded-circle w-75 h-75">
							</div>
							<div class="col-6">
								<h4>Usuario</h4>
								<a href="#">Ver perfil</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar sesión</button>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>