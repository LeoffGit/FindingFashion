<?php
session_start();
include "../../PHP/libreria.php";
if($_SESSION['tipouser']!=2){
  header('location:/FindingFashion/index.php');
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
    <title>Finding Fashion</title>

</head>

<body>

<div class="circle3"></div>

    <?php headerito(); ?>
    
    <div class="container-fluid">
      <div id="contenido" class="cursoalumno">
        <div class="row">
          <h2>Tus cursos <?php saludarusuario(); ?></h2>
        </div>
        <br><br>
        <div class="row">
          <?php cursosUsuario($_SESSION['id_usuario']); ?>
        </div>
      </div>
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


