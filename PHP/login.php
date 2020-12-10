<?php
include "libreria.php";
print_r($_POST);
session_start();
login();
header('Location:/TFG/index.php');
 ?>
