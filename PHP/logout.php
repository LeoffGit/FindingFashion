<?php
session_start();
session_destroy();
$_SESSION['tipouser']=0;
header('Location:/FindingFashion/index.php');
 ?>
