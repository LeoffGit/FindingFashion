<?php
session_start();
include "../../../PHP/libreria.php";
sesioncurso($_SERVER['REQUEST_URI']);
if(isset($_POST['logmail'])){
  login();
}
if(isset($_POST['adquirir'])){
  adquirircurso($_SESSION['id_usuario'],$_SESSION['idpagina']);
}

$foto=getfotocurso($_SESSION['idpagina']);
$ruta=strtolower($foto);
$nombrecurso=getnombrecurso($_SESSION['idpagina']);
 ?>
 <!doctype html>

 <html lang="en">

 <head>

   <!-- Required meta tags -->

   <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="shortcut icon" href="ico/favicon.ico">
   <link rel="stylesheet" href="../../../css/font-awesome.css">
   <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
   <link rel="stylesheet" href="../../../css/master.css">

   <title>TFG</title>
   <style>
  .ulita {
    -webkit-column-count: 1;
    -moz-column-count: 1;
    column-count: 1;
  }
</style>
 </head>

 <body>

 <div class="circle"></div>

   <?php headerito($_SESSION['tipouser']); ?>
    <div class="container-fluid" id="contenido">
      <div class="row">
        <div class="col-sm-7">
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../../../images/cursos/<?php echo $foto; ?>/carrusel1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../../images/cursos/<?php echo $foto; ?>/carrusel2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../../images/cursos/<?php echo $foto; ?>/carrusel3.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <p></p>
          </div>
          <div class="row">
            <div class="jumbotron">
              <h2 class="display-5">Requisitos</h2>
              <ul class="ulita">
                <li>No requiere ningun conocimiento previo sobre el mundo textil</li>
                <li>Un PC/Laptop con Windows, Linux o Mac</li>
                <li>Regla (60 cms aprox), escuadra y plantilla de curvas</li>
                <li>3 rotuladores permanentes de ancho medio de colores distintos</li>
                <li>Kit básico de costura (tijeras, cinta métrica, alfileres y agujas)</li>
                <li>Papel para patron</li>
              </ul>
              <hr class="my-4">
              <h2 class="display-5">Descripcion</h2>
              <p class="">
              En este curso aprenderemos las nociones básicas del patronaje y aprenderemos a realizar paso a paso el patrón básico de falda, cuerpo delantero, cuerpo trasero, mangas, cuellos, bolsillos y pantalon así como muchas transformaciones clásicas y modernas al mismo.
              En este curso pueden participar personas que no tengan ninguna experiencia en el area del patronaje y la confección
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12  ">
              <h2 class="display-5">Contenido del curso</h2>
              <ul class="list-group">
                <li class="list-group-item ">Video 1 :titulo del video</li>
                <li class="list-group-item ">Tarea 1 :nombre de la tarea</li>
                <li class="list-group-item ">Video 2 :titulo del video</li>
                <li class="list-group-item ">Tarea 2 :nombre de la tarea</li>
                <li class="list-group-item ">Video 3 :titulo del video</li>
                <li class="list-group-item ">Tarea 3 :nombre de la tarea</li>
              </ul>
            </div>
          </div>
          <br>
          <h2>Cursos relacionados</h2>
          <br>
          <div class="row">
            
          <?php cursosRelacionados($_SESSION['idpagina']);?>

          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="card sticky-top">
          <img src="../../../images/index/<?php echo "$ruta"?>.jpg" class="card-img-top " alt="foto">
            <p class="textonimage"><?php echo "$nombrecurso"?></p>
            <div class="card-body text-white">
              <form class="" action="" method="post">
                <?php if(isset($_SESSION['id_usuario'])){ ?>
              <button type="submit" class="boton-cards" name="adquirir"><?php $esto=checkCurso($_SESSION['id_usuario'],$_SESSION['idpagina']); echo $esto; ?></button>
              <?php linkvid($_SESSION['id_usuario'],$_SESSION['idpagina']); ?>
              <?php } else{
                echo "<a href='/FindingFashion/pages/formulario.html'><button type='button' class='boton-cards' name='adquirir'>Registrate para adquirir el curso</button></a>";
              }
                ?>
              </form>
              <br><br>
              <p class="card-text">Este curso contiene :</p>

              <ul class="list-group text-dark">
                <li class="list-group-item">4,5 horas de videos</li>
                <li class="list-group-item">5 videos</li>
                <li class="list-group-item">Acceso de por vida</li>
                <li class="list-group-item">Certificado de finalización</li>
              </ul>


            </div>
          </div>
        </div>


      </div>

    </div>
    
  </div>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
