<?php
session_start();
session_destroy();
$_SESSION['tipouser']=0;
header('location:/TFG/index.php');
 ?>
