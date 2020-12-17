<?php
require("funcionconection.php");
    function login(){
        $conexion = conexion("academiatfg");
        $email = $_POST['logmail'];
        $contrasena = $_POST['logcontrasena'];
        //$_SESSION['tipouser'] = 0;
        if ($email&&$contrasena){  
          $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email'");
          $contar = mysqli_num_rows($query);
          if ($contar != 0){
              $row=mysqli_fetch_array($query);
                  if($email == $row['email'] && password_verify($contrasena, $row['contrasena'])){
                      $_SESSION['email'] = $email;
                      $_SESSION['id_usuario'] = $row['idUsuarios'];
                      $_SESSION['nombre'] = $row['nombre'];
                      $query2 = mysqli_query($conexion,"select * from alumno WHERE Usuarios_idUsuarios = $row[idUsuarios]");
                      $contar2 = mysqli_num_rows($query2);
                          if ($contar2 == 0){
                              $_SESSION['tipouser']=2;
                              echo "tipouser2";
                          }else{
                              $_SESSION['tipouser']=1;
                              echo "tipouser1";

                          }
                      }
              }
        }
            mysqli_close($conexion);
    }



    function saludarusuario(){
      $usuario=$_SESSION['nombre'] ;
        echo "$usuario";
    }
    function raizdocumento(){
      echo "http://localhost/FindingFashion";
    }

    /*las rutas de los header estan en raiz
    al hacer include de la pag da error: cannot redeclare header
    habrua q*/
    function headerito(){
      $documento= $_SERVER['DOCUMENT_ROOT'];
      if (!isset($_SESSION['tipouser'])) {
        $_SESSION['tipouser']=0;
      }
        switch ($_SESSION['tipouser']) {
            case '1':
                include "$documento/FindingFashion/cabeceras/header2alumno.php";
                break;
            case '2':
                include "$documento/FindingFashion/cabeceras/header2profesor.php";
                break;
            default:
                include "$documento/FindingFashion/cabeceras/header2.php";
           }
    }

    function footer(){
      $documento= $_SERVER['DOCUMENT_ROOT'];
                include "$documento/FindingFashion/Footer/footer.html";

    }

    function pintarprofesor($idprofesor){
        $con = conexion("academiatfg");
        $consulta = "select nombre, especialidad, valoracion, foto, idProfesor from profesor where Usuarios_idUsuarios= $idprofesor";
        $row=mysqli_fetch_row($consulta);
        mysqli_close($con);

        return $row;
    }

    function cursosProfesor($sesion_idUsuario){

        $con = conexion("academiatfg");
        $query = "select nombre, foto, descripcion from curso where Profesor_Usuarios_idUsuarios = $sesion_idUsuario";
        $row = mysqli_query($con,$query);
        mysqli_close($con);

        return $row;
    }

    function getfotocurso($idcurso){
      $con = conexion("academiatfg");
      $consulta = "select foto from curso where idcurso = '$idcurso'";
      $query = mysqli_query($con,$consulta);
      $row=mysqli_fetch_row($query);
      $resultado=$row[0];
      return $resultado;
      mysqli_close($con);
    }

    function getnombrecurso($idcurso){
      $con = conexion("academiatfg");
      $consulta = "select nombre from curso where idcurso = '$idcurso'";
      $query = mysqli_query($con,$consulta);
      $row=mysqli_fetch_row($query);
      $resultado=$row[0];
      return $resultado;
      mysqli_close($con);
    }

    function arrayalumno($idalumno){

        $con = conexion("academiatfg");
        $consulta = "select  nombre, estudios, id_Estudiante from alumno where Usuarios_idUsuarios= $idalumno";
        $query = mysqli_query($con,$consulta);
        $row=mysqli_fetch_row($query);
        mysqli_close($con);

        return $row;
    }
    function adquirircurso ($idalumno,$idcurso){
      $con = conexion("academiatfg");
      $query = mysqli_query($con,"insert into cursos_adquiridos VALUES ($idalumno,$idcurso)");
      mysqli_close($con);

    }
    function sesioncurso($variableURI){
      switch ($variableURI) {
        case '/FindingFashion/pages/Cursos/Patronaje/Principal.php':
        $_SESSION['idpagina']=2;
          break;
          case '/FindingFashion/pages/Cursos/Patronaje/videos.php':
          $_SESSION['idpagina']=2;
            break;
            case '/FindingFashion/pages/Cursos/Diseno/Principal.php':
            $_SESSION['idpagina']=1;
              break;
            case '/FindingFashion/pages/Cursos/Diseno/videos.php':
            $_SESSION['idpagina']=1;
              break;
              case '/FindingFashion/pages/Cursos/Modelaje/Principal.php':
              $_SESSION['idpagina']=3;
                break;
              case '/FindingFashion/pages/Cursos/Modelaje/videos.php':
              $_SESSION['idpagina']=3;
                break;
                case '/FindingFashion/pages/Cursos/CorteYConfeccion/Principal.php':
                $_SESSION['idpagina']=4;
                  break;
                case '/FindingFashion/pages/Cursos/CorteYConfeccion/videos.php':
                $_SESSION['idpagina']=4;
                  break;
          default:
            $_SESSION['idpagina']=0;
            break;
      }
    }
    function checkCurso($idalumno,$idcurso){

      $con = conexion("academiatfg");
      $query = mysqli_query($con,"select * from cursos_adquiridos where Alumno_Usuarios_idUsuarios = $idalumno and curso_idcurso = $idcurso");
      if($contar = mysqli_num_rows($query)){
        mysqli_close($con);
        return "Ya tienes el curso";
      }
      else {
        mysqli_close($con);
        return "Adquirir Curso";
      }
    }
      function linkvid($idalumno,$idcurso){
        $con = conexion("academiatfg");
        $query = mysqli_query($con,"select * from cursos_adquiridos where Alumno_Usuarios_idUsuarios = $idalumno and curso_idcurso = $idcurso");
        if($contar = mysqli_num_rows($query)){
          mysqli_close($con);
          echo "<button class='boton-cards' name='Comenzar Curso'><a href='videos.php'>Comenzar Curso</a></button>";
        }
      }
      function cursosRelacionados($idcurso){
        $con = conexion("academiatfg");
        $query = mysqli_query($con,"select nombre, foto, descripcion from curso where idcurso != $idcurso");
          for ($i=0; $i <mysqli_num_rows($query); $i++){
              $fila=mysqli_fetch_row($query);
              $ruta="../".$fila[1]."/Principal.php";
              $foto=strtolower($fila[1]);
              $nombre=$fila[0];
              $descripcion=$fila[2];
                echo"   <div class='col-xl-4'>";
                echo"   <div class='card'>";
                echo"     <img src='../../../images/index/$foto.jpg' class='card-img-top' alt='foto'>";
                echo"     <div class='card-body'>";
                echo"       <h5 class='card-title'>$nombre</h5>";
                echo"       <p class='card-text'>$descripcion</p>";
                echo"       <a href='$ruta'><button class='boton-cards'>Ir al curso</button></a>";
                echo"     </div>";
                echo"   </div>";
                echo" </div>";
          }
        
        mysqli_close($con);
      }

      function cursosUsuario($idusuario){
        $con = conexion("academiatfg");
        $query1 = mysqli_query($con,"select curso_idcurso from cursos_adquiridos where Alumno_Usuarios_idUsuarios = $idusuario");
        if($query1){
          for ($i=0; $i <mysqli_num_rows($query1); $i++){
            $fila=mysqli_fetch_row($query1);
            $cursos[$i]=$fila[0];
          }
          for ($i=0; $i <count($cursos) ; $i++) { 
            $idcurso=$cursos[$i];
          $query2 = mysqli_query($con,"select nombre, foto, descripcion from curso where idcurso = $idcurso");
            for ($j=0; $j <mysqli_num_rows($query2); $j++){
                $fila=mysqli_fetch_row($query2);
                $ruta="../Cursos/".$fila[1]."/Principal.php";
                $foto=strtolower($fila[1]);
                $nombre=$fila[0];
                $descripcion=$fila[2];
                  echo"   <div class='col-lg-3'>";
                  echo"   <div class='card'>";
                  echo"     <img src='../../images/index/$foto.jpg' class='card-img-top' alt='foto'>";
                  echo"     <div class='card-body'>";
                  echo"       <h5 class='card-title'>$nombre</h5>";
                  echo"       <p class='card-text'>$descripcion</p>";
                  echo"       <a href='$ruta'><button class='boton-cards'>Ir al curso</button></a>";
                  echo"     </div>";
                  echo"   </div>";
                  echo" </div>";
            }
          }



        }
        mysqli_close($con);
      }
      

?>
