    <?php
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $estudios=$_POST['estudios'];
        $contrasena=password_hash($_POST['contrasena'],PASSWORD_DEFAULT);
        echo "$nombre $email $contrasena $estudios";
        echo "</br>";
     $con = mysqli_connect('localhost', 'root', '', 'academiatfg');
            mysqli_set_charset($con, 'utf-8');
            $accion="insert into usuarios (nombre, foto, email, contrasena) values('$nombre','alumno.png','$email','$contrasena')";
            echo "$accion";
            $accion1="select idUsuarios from usuarios where email= '$email'";
            $resultado=mysqli_query($con,$accion);
        if ($resultado){
          echo "estoy aqui";
               $resultado1=mysqli_query($con,$accion1);
               $row = mysqli_fetch_row($resultado1);
               $id = $row[0];
               echo "$id";
               echo "</br>";

               $accion2="insert into alumno (Usuarios_idUsuarios,estudios,nombre) values('$id','$estudios','$nombre')";
               echo "$accion2";
               $resultado2 = mysqli_query($con,$accion2);
        if($resultado2){
            header("Location:/TFG/index.php");
        }
        }else{
            echo"Error al ingresar el nuevo usuario";
        }
        mysqli_close($con);
        ?>
