
        <nav class="navbar navbar-dark navbar-expand-sm">
          <button class=" navbar-toggler" data-toggle="collapse" data-target="#collapse_menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapse_menu">
            <a class="navbar-brand" href="/TFG/index.php"><img src="http://localhost/TFG/images/Logo2.png" alt=""></a>

            <span class="navbar-text" id="titulo">Learning Sewing Desing</span>
            <button type="btn " id="boton" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Inicio/Registro</button>
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
                    <form method="POST" action="">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="recipient-name" name="logmail">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="recipient-name" name="logcontrasena">
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" id="boton"><a href="/TFG/pages/formulario.html">Registrarse</a></button>
                    <input type="submit"  value="Entrar" class="boton2">
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </nav>
