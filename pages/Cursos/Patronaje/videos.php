<?php
session_start();
include "../../../PHP/libreria.php";
if($_SESSION['tipouser']==0){
  header('location:/TFG/indexito.php');
}
$url = strtok($_SERVER["REQUEST_URI"],'?');
sesioncurso($url);
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
  <link rel="stylesheet" href="../../../css/font-awesome.css">
  <link rel="stylesheet" href="../../../css/master.css">
  <title>TFG</title>
  <style>

      .card {
        margin-top: 0%;
        border: 1px solid white;
        width: 18rem;
        background-color: black;
        color: white;
      }
      .cajacoment{
        margin-top:1%;
        padding:1%;
        background-color: black;
        border-radius:1%;
        color:white;
        width:95%;
      }
    .list-group-item{
      border: 1px solid white;
      background-color: black;
    }
    a:link{
      color:rgb(236, 236, 123);
    }
    a:hover{
      color:rgb(236, 236, 123);

    }
    a:visited{
      color:grey;

    }
  </style>

</head>
<body>
  <div class="container-fliud">
    <?php headerito(); ?>
    <div class="row" id="contenido">
      <div class="col-md-1">

      </div>
      <div class="col-md-8">
        <div class="embed-responsive embed-responsive-16by9" id="videogrande">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HWwHmeEw2Us"
            allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-7">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne" id="trig1">
                      Lección 1
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9 " id="vid1">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HWwHmeEw2Us"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn text-white collapsed" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo" id="trig2">
                      Lección 2
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9 " id="vid2">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0GF4aTzRkHc"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn text-white collapsed" data-toggle="collapse" data-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree" id="trig3">
                      Lección 3
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9 " id="vid3">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N8eXpXpUp9c"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn text-white collapsed" data-toggle="collapse" data-target="#collapseFour"
                      aria-expanded="false" aria-controls="collapseThree" id="trig4">
                      Lección 4
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9 " id="vid4">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3d2yE3dzzlc"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-8">
        <?php include "../../../PHP/cajacomentarios.php" ?>
      </div>
    </div>

    <?php footer(); ?>

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
    <script type="text/javascript">
    $( document ).ready(function() {
      $('#refrescar').click(function() {
              window.location.reload();
            });

        $('#collapseOne').on('show.bs.collapse' ,function() {
          var video = $('#vid1').html();
                $('#videogrande').html(video);
              });
            $('#collapseTwo').on('show.bs.collapse' ,function() {
              var video = $('#vid2').html();
                    $('#videogrande').html(video);
                  });
                  $('#collapseThree').on('show.bs.collapse' ,function() {
                    var video = $('#vid3').html();
                          $('#videogrande').html(video);
                        });
                        $('#collapseFour').on('show.bs.collapse' ,function() {
                          var video = $('#vid4').html();
                                $('#videogrande').html(video);
                              });
    });

    </script>
</body>

</html>
