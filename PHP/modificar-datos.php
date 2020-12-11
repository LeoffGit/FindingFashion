<?php
$nombre=$_POST["nombre"];
$contrasena=password_hash($_POST['contrasena'],PASSWORD_DEFAULT);
session_start();
$id_usuario=$_SESSION['id_usuario'];

			if(isset($_POST['nombre']) && ($_POST['contrasena'])){
        
                $conn = new mysqli('localhost', 'root', '', 'academiatfg');
                mysqli_set_charset($conn, 'utf-8');
               
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                $sql = "update usuarios set nombre='$nombre',contrasena='$contrasena' where idUsuarios ='$id_usuario'";
                
                if ($conn->query($sql)) {
                    $_SESSION['nombre']=$nombre;
                    header('Location:/FindingFashion/index.php');
                } else {
                    header('Location:/FindingFashion/pages/modificar.html');
                }
                           
                 
            }
?>