<?php
session_start();
include "../../PHP/libreria.php";
if($_SESSION['tipouser']!=2){
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

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="shortcut icon" href="ico/favicon.ico">
   <link rel="stylesheet" href="../../css/font-awesome.css">
   <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
   <link rel="stylesheet" href="../../css/master.css">
   <style media="screen">
   a:link{
     color:black;
   }
   a:hover{
     color:black;
   }
   a:visited{
     color:grey;
   }
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
            <div class="row" id="rowProfesor">
                <?php
                $sesion_idUsuario=$_SESSION ['id_usuario'];
                $result = cursosProfesor($sesion_idUsuario);
                if ($result != ""){
                  for ($i=0; $i <mysqli_num_rows($result); $i++){
                      $fila=mysqli_fetch_row($result);
                        ?>
                        <div class="col-sm-3">
                            <div class="card">
                              <img src="/TFG/images/cursos/<?php echo $fila[1]  ?>/logocurso.jpg" class="card-img-top" alt="">

                                <div class="card-body">
                                        <h5 class="card-title"><?php echo $fila[0] ?></h5>
                                        <p class="card-text"><?php echo $fila[2]; ?></p>
                                    <button class="boton-cards"><a href="/TFG/pages/Cursos/<?php echo $fila[1]; ?>/Principal.php">Ir al curso</a></button>
                                </div>
                            </div>
                        </div>
                    <?php }
                    }
                ?>
            </div>
        </div>
    </body>
    <?php footer(); ?>
</html>
