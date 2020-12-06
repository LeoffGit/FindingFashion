<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">
	</head>
	<body>
		<div id="cabecera">
                <div class="shell">
                    <div id="navigation">
						<h3>Panel de administracion</h3>
						<?php
						if(isset($_COOKIE['nombre'])){
							echo "<h1> Bienvenido ".$_SESSION['nombre']."</h1>";
							?>
							<ul>
                        		<li><a href="alumnos.php">Menu Alumnos</a></li>
                       			<li><a href="profesores.php">Menu profesores</a></li>
								<li><a href="salir.php">SALIR</a></li>
                      		</ul>
						<?php } ?>
					</div>	
                </div>
            </div>
        
        
        <br><br>

		<div class="container">
             
                <table style="width:100%">
                    <thead>
                        <td><h3>Administración de los alumnos</h3></td>
                        <td><h3>Administración de los profesores</h3></td>
                    </thead>
                    <tbody>
                        <tr>
                        <td><p class="card-text"><a href="#" class="btn-link">Ver perfil de alumno</a></p></td>
                            <td><p class="card-text"><a href="#" class="btn-link">Ver perfil de profesor</a></p></td>
                        </tr>
                             
                        <tr>
                        <td><p class="card-text"><a href="#" class="btn-link">Dar da baja a un alumno</a></p></td>
                            <td><p class="card-text"><a href="#" class="btn-link">Dar da baja a un</a></p></td>
                        </tr>
                        <tr>
                        <td><p class="card-text"><a href="#" class="btn-link">Leer mensajes de los alumnos</a></p></td>
                            <td><p class="card-text"><a href="#" class="btn-link">Leer mensajes de los profesores</a></p></td>
                        </tr>
                    </tbody>
                </table>
            
            <br><br>
            <hr>
            <br>

            <h3>Otras acciones</h3>
        
            <p class="card-text"><a href="#" class="btn-link">Crear cursos</a></p>
            <p class="card-text"><a href="#" class="btn-link">Eliminar cursos</a></p>
            <p class="card-text"><a href="#" class="btn-link">Ver todos los cursos</a></p>
            <p class="card-text"><a href="#" class="btn-link">Buscar cursos</a></p>
        </div>
	</body>
</html>