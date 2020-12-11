<div id="L" class="cajacoment">
<form name="form1" method="post" action="">
  <label for="textarea"></label>
  <center>
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea" required><?php if(isset($_GET['nombre'])) { ?>@<?php echo $_GET['nombre']; ?><?php } ?> </textarea>
    </p>
    <p>
      <input type="submit" id="refrescar" class="boton-cards" <?php if (isset($_GET['id'])) { ?>name="respuesta" value="respuesta"<?php } else { ?>name="comentar"<?php } ?>value="Comentar">
    </p>
  </center>
</form>

<?php
  $cursoactual=$_SESSION['idpagina'];
	$conexion=conexion("academiatfg");
	if(isset($_POST['comentar'])) {
		$query = mysqli_query($conexion,"INSERT INTO comentarios (curso_idcurso,comentario,Usuarios_idUsuarios,fecha) value ('".$_SESSION['idpagina']."','".$_POST['comentario']."','".$_SESSION['id_usuario']."',NOW())");
	//	if($query) { header('Location: '.$_SERVER['PHP_SELF']);
// }
	}
?>

<?php
	if(isset($_POST['respuesta'])) {
		$query = mysqli_query($conexion,"INSERT INTO comentarios (curso_idcurso,comentario,respuesta,Usuarios_idUsuarios,fecha) value ('".$_SESSION['idpagina']."','".$_POST['comentario']."','".$_GET['id']."','".$_SESSION['id_usuario']."',NOW())");
		//if($query) { header('Location: '.$_SERVER['PHP_SELF']); }
	}
?>


	<div id="container">
    	<ul id="comments" class="list-group">

        <?php

        $comentarios = mysqli_query($conexion,"SELECT * FROM comentarios WHERE respuesta = 0 AND curso_idcurso = $cursoactual  ORDER BY idComentarios DESC");
		while($row=mysqli_fetch_array($comentarios)) {
			$usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE idUsuarios = '".$row['Usuarios_idUsuarios']."'");
			$user = mysqli_fetch_array($usuario);
		?>

        	<li class=" list-group-item">
            	<div class="avatar">
                <img src="/FindingFashion/images/fotosUsuarios/<?php echo $user['foto']; ?>" height="55" width="55">
                </div>
                	<header>
                    <a href="#" class="userlink avideos"><?php echo $user['nombre']; ?></a>  <span class="pubdate"><?php echo $row['fecha']; ?></span>
                    </header>
                    <div class="bodycomentario">
                    <p class="comentario">
                      <br>
                    <?php echo $row['comentario']; ?>
                    </p>
                    <span>
											<?php $actual_link = "$_SERVER[REQUEST_URI]"; $usernom=$user['nombre']; $rowid=$row['idComentarios'] ?>
                    <a href="<?php echo "$actual_link?nombre="; echo"$usernom&id=$rowid";?>" class="avideosrespuesta">
                    Responder
                    </a>
                    </span>
                </div>

                <?php
				$contar = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM comentarios WHERE  respuesta = '".$row['idComentarios']."'"));
				if($contar != '0') {

					$respuesta = mysqli_query($conexion,"SELECT * FROM comentarios WHERE respuesta = '".$row['idComentarios']."' ORDER BY idComentarios DESC");
					while($rep=mysqli_fetch_array($respuesta)) {

					$usuario2 = mysqli_query($conexion,"SELECT * FROM usuarios WHERE idUsuarios = '".$rep['Usuarios_idUsuarios']."'");
					$user2 = mysqli_fetch_array($usuario2);
				?>

                <ul class="list-group">
                	<li class="list-group-item">
                    	<div class="avatar">
												<img src="/FindingFashion/images/fotosUsuarios/<?php echo $user2['foto']; ?>" height="55" width="55">
                </div>
                	<div class="cmmnt-content">
                        <header>
                        
                        <a href="#" class="userlink avideos"><?php echo $user2['nombre']; ?></a>  <span class="pubdate"><?php echo $rep['fecha']; ?></span>
                        </header>
                        <div class="bodycomentario">
                        <p class="comentario">
                          <br>
                        <?php echo $rep['comentario']; ?>
                        </p>
                        </div>
                    </div>

                    </li>
                </ul>

                <?php } } } ?>
            </li>

        </ul>
    </div>
</div>
