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
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras varius urna a orci rutrum elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc ex leo, aliquet eget quam in, congue commodo ante. Praesent ut interdum justo. Praesent ultricies elementum eros, eget luctus erat tempus quis. Sed ante sem, commodo vel lorem id, aliquam interdum ex. Mauris aliquet quis tellus id scelerisque. Nullam in sem sit amet purus lacinia suscipit a vitae nisi. Quisque ornare augue ut nisl venenatis gravida.</p>
             <a href="FindingFashion/pages/Cursos/CorteYConfeccion/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/corteyconfeccion.jpg'); changeCircleColor('#FFD359');changeDescription(1)">Corte y confección</a>
             <a href="FindingFashion/pages/Cursos/Diseno/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/diseno.jpg'); changeCircleColor('#FFDC7D');changeDescription(2)">Diseño</a>
             <a href="FindingFashion/pages/Cursos/Modelaje/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/modelaje.jpg'); changeCircleColor('#F9C537');changeDescription(3)">Modelaje</a>
             <a href="FindingFashion/pages/Cursos/Patronaje/Principal.php" onmouseover="imgSlider('http://localhost/FindingFashion/images/index/patronaje.jpg'); changeCircleColor('#FFD359');changeDescription(4)">Patronaje</a>
         </div>
         <div class="imgBox">
            <img src="http://localhost/FindingFashion/images/index/corteyconfeccion.jpg" class="imagen" height="250">
            <p id="descripcion">Si te apasiona el mundo de la moda el ciclo de Patronaje y moda es el apropiado para tí. Controla todo el proceso creativo para poder confeccionar colecciones, desde el diseño de las prendas.
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
                document.getElementById("descripcion").innerHTML="En este curso aprenderás las características de cada uno de los elementos básicos del diseño de modas mas utilizados en la creacion de prendas. Podrás descubrir temas de inspiracion para diseñar ropa de manera exitosa! Los elementos que conoceras son parte integral de todo tipo de diseño incluyendo prendas y textiles. Los elementos que verás en el curso son: 1.Línea 2.Silueta 3.Color 4.Forma 5.Textura Tambien conocerás el Proceso Creativo de Diseño para ir paso a paso y lograr buenas propuestas. Conocerás como se diseña un Moodboard o Tabla de Inspiración para diseñar. Veras en cada uno de ellos ejemplos en estampados, ropa y accesorios. Si te gusta la Moda este curso podra inspirarte a crear diseños innovadores! " ;
                setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
                

            break;

            case 2:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "texto2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras varius urna a orci rutrum elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc ex leo, aliquet eget quam in, congue commodo ante. Praesent ut interdum justo. Praesent ultricies elementum eros, eget luctus erat tempus quis. Sed ante sem, commodo vel lorem id, aliquam interdum ex. Mauris aliquet quis tellus id scelerisque. Nullam in sem sit amet purus lacinia suscipit a vitae nisi. Quisque ornare augue ut nisl venenatis gravida." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            

            break;

            case 3:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "texto tresito Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras varius urna a orci rutrum elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc ex leo, aliquet eget quam in, congue commodo ante. Praesent ut interdum justo. Praesent ultricies elementum eros, eget luctus erat tempus quis. Sed ante sem, commodo vel lorem id, aliquam interdum ex. Mauris aliquet quis tellus id scelerisque. Nullam in sem sit amet purus lacinia suscipit a vitae nisi. Quisque ornare augue ut nisl venenatis gravida." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            break;

            case 4:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "texto 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras varius urna a orci rutrum elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc ex leo, aliquet eget quam in, congue commodo ante. Praesent ut interdum justo. Praesent ultricies elementum eros, eget luctus erat tempus quis. Sed ante sem, commodo vel lorem id, aliquam interdum ex. Mauris aliquet quis tellus id scelerisque. Nullam in sem sit amet purus lacinia suscipit a vitae nisi. Quisque ornare augue ut nisl venenatis gravida." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            break;                

            default:
            
            document.getElementById("descripcion").classList.add("fade");
            document.getElementById("descripcion").innerHTML= "default Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras varius urna a orci rutrum elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc ex leo, aliquet eget quam in, congue commodo ante. Praesent ut interdum justo. Praesent ultricies elementum eros, eget luctus erat tempus quis. Sed ante sem, commodo vel lorem id, aliquam interdum ex. Mauris aliquet quis tellus id scelerisque. Nullam in sem sit amet purus lacinia suscipit a vitae nisi. Quisque ornare augue ut nisl venenatis gravida." ;
            setTimeout(() => { document.getElementById("descripcion").classList.remove("fade"); }, 500);
            break;
        }
    }
</script>
</body>
</html>
