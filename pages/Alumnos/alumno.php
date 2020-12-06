<?php
session_start();
include "../../PHP/libreria.php";
if($_SESSION['tipouser']!=1){
  header('location:/TFG/index.php');
}
?>
<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" type="text-css" href="../../css/bootstrap-social.scss">
    <link rel="stylesheet" type="text/css" href="../../fonts/Leixo.ttf">
    <link rel="stylesheet" href="../../css/master.css">
    <style media="screen">
      .botomito{
        position: fixed;
        bottom: 0;
      }
    </style>
    <title>TFG</title>

</head>

<body>
    <?php headerito(); ?>
        <div class="container-fluid">

            <h1 class="display-4">Mis cursos</h1>
            <div class="row">
                <div class="col-sm-1">&nbsp;</div>
        <?php
            $id=$_SESSION['id_usuario'];
            $conexion = mysqli_connect('localhost', 'root', '', 'academiatfg');
            mysqli_set_charset($conexion, 'utf8');
            $consulta="select nombre from curso c, cursos_adquiridos cu where c.idcurso = cu.curso_idcurso and cu.Alumno_Usuarios_idUsuarios ='$id';";
            $resultado=mysqli_query($conexion,$consulta);
            if (mysqli_num_rows($resultado)==0) {
              echo "<h2 style='margin-top:10%;'>Todavía no has adquirido ningún curso</h2>";
            }
            while($fila=mysqli_fetch_row($resultado)){?>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="../../images/logo2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2><?php echo $fila[0]?></h2>
                        <h6>Tu progreso</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: 25%; background-color: rgb(236, 236, 123);color: black;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                25%
                            </div>
                        </div>
                        <a href='paginacurso.html<?php echo $fila[0] ?>'>Seguir viendo</a>
                        <a href="" class="card-link">Inicio</a>
                    </div>
                </div>
            </div>
           <?php }
            mysqli_close($conexion);
          ?>

  <?php footer(); ?>
    </div>
  </div>


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>
