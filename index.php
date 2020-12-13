<?php
session_start();
include "PHP/libreria.php";

if(isset($_POST['logmail'])){
  login();
}

 ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Finding Fashion</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="<?php raizdocumento(); ?>/css/styleindex.css">
  <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
 <section>
        <div class="circle">
        </div>  
        <?php headerito();?>


     <div class="content">
         <div class="textBox">
             <h2> No es solo moda es <br> <span>Finding Fashion</span></h2>
             <p>El diseño de moda incluye todo tipo de especialidades. Para trabajar en el mundo de la moda es necesario un conocimiento práctico y técnico completo, nuestros cursos de diseño de moda incluyen cursos generales y temario específico, para que puedas aprender patronaje industrial, estilismo, diseño, troqueles para tela y mucho más.
                En nuestra escuela de diseño de moda impartimos cursos específicos de moda y complementos, diferentes tipos de patronaje y confección, en los que además repasamos a fondo la historia de la moda y los diseños que han marcado la historia de la alta costura.</p>
            <div class="links">
             <a href="FindingFashion/pages/Cursos/CorteYConfeccion/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/corteyconfeccion.jpg'); changeCircleColor('#FFD359');changeDescription(1)">Corte y confección</a>
             <a href="FindingFashion/pages/Cursos/Diseno/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/diseno.jpg'); changeCircleColor('#FFDC7D');changeDescription(2)">Diseño</a>
             <a href="FindingFashion/pages/Cursos/Modelaje/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/modelaje.jpg'); changeCircleColor('#F9C537');changeDescription(3)">Modelaje</a>
             <a href="FindingFashion/pages/Cursos/Patronaje/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/patronaje.jpg'); changeCircleColor('#FFD359');changeDescription(4)">Patronaje</a>
             </div>
         </div>
         <div class="imgBox">
            <img src="http://localhost/FindingFashion/images/index/corteyconfeccion.jpg" class="imagen" height="250">
            <p id="descripcion">Dentro de la parte de confección, manejarás las diferentes técnicas de puntadas a mano y a máquina y aprenderás los diferentes métodos de corte y colocación del patrón sobre el tejido.
            </p>
            
         </div>
     </div>
     
     <ul class="sci">
         <li>
            <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
         </li>
         <li>
            <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
         </li>
         <li>
            <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
         </li>
         <li>
            <a href="https://discord.gg/5MZXgfGmb4" class="social-icon">
                <i class="fab fa-discord"></i>
              </a>
         </li>

      </ul>
     
 </section>
 <script type ="text/javascript">
    function imgSlider(anything){
        document.querySelector('.imagen').src= anything;
    }
    function changeCircleColor(color){
        const circle = document.querySelector('.circle');
        circle.style.background = color;
    }
    function changeDescription(number){

        switch (number) {
            case 1:
            
                document.getElementById("descripcion").classList.add("fade");
                document.getElementById("descripcion").innerHTML="Dentro de la parte de confección, manejarás las diferentes técnicas de puntadas a mano y a máquina y aprenderás los diferentes métodos de corte y colocación del patrón sobre el tejido.";
                setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
                

            break;

            case 2:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "El curso de Diseño de Moda sigue un hilo conductor progresivo a partir del concepto “diseño”, que permitirá aprender a seleccionar y trabajar el tejido más adecuado para cada diseño." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            

            break;

            case 3:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "El modelaje (o moulage) es una técnica de diseño de moda que permite construir la prenda directamente sobre el cuerpo de la persona o sobre un maniquí para posteriormente obtener un patrón." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            break;

            case 4:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "Si te apasiona el mundo de la moda el ciclo de Patronaje y moda es el apropiado para tí. Controla todo el proceso creativo para poder confeccionar colecciones, desde el diseño de las prendas." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            break;                

            default:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "Dentro de la parte de confección, manejarás las diferentes técnicas de puntadas a mano y a máquina y aprenderás los diferentes métodos de corte y colocación del patrón sobre el tejido." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            break;
        }
    }
</script>
</body>
</html>
