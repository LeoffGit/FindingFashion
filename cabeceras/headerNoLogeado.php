<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
        <link rel="stylesheet" href="css/master.css">
        <title>TFG</title>
        <style>
            .card {
              margin-left:auto;
              margin-right:auto;
              width: 90%;
            }

            .boton-cards {
              width: 95%;
            }

            #contenido{
              margin-top:6%;
            }
        </style>
    </head>
    <body>
        <div class="container-fliud">
        <!-- Menu -->
        <div class="row" id="barra">

          <div class="col-sm-3 icono"><img src="images/logo2.png" id="icono" /></div>
          <div class="col-sm-6" style="margin-top: 3.5%;"><span id="titulo">Learning Sewing Desing</span></div>

          <div class="col-sm-3">
            <button type="button" id="boton" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Inicio/Registro</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Bienvenido</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="boton" data-dismiss="modal">Registro</button>
                    <button type="button" id="boton">Iniciar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>