<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png"/>
     <link rel="stylesheet" href="./css/style.css">
    <title>Frontend Mentor | Social proof section</title>

  </head>
  <body>

    <!--///////////////////////////// variables PHP/////////////////////////////////-->
    <?php
      define("time",8);
      $price = 10999.99;
      $date = ["15/02/2022", "20/01/2022", "25/03/2022"];
      
    ?>
    <!--///////////////////////////////////////////////////////////////////////////////-->
      <div class="container1">

          <div class="container_tittle">
             <h1 class="tittle">Diplomatura en PHP y MySQL</h1>
          </div>

          <div class="stars">
              <div class="rate rt1">
                <div class="cont_star"><img src="img/s.svg"/></div>
                <h5>Nivel Inicial</h5>
              </div>
              <div class="rate rt2">
                <div class="cont_star"><img src="img/s.svg"/><img src="img/s.svg"/></div>
                <h5>Nivel Intermedio</h5>
              </div>
              <div class="rate rt3"> 
                <div class="cont_star"><img src="img/s.svg"/><img src="img/s.svg"/><img src="img/s.svg"/></div>
                <h5>Nivel Avanzado</h5>
              </div>
          </div>

     </div>

    <!--///////////////////////////////////////////////////////////////////////////////-->
    <div class="container2">

        <!--1-->
        
        <div class="cards card1">
          <div class= "container_data">
            <img src="img/logo.png" alt="logo image" class="logo">
            <div>
                <div class="name">PHP y MySQL inicial</div> 
                <div class="tag" >Descripcion</div>
            </div>
          </div>
          <div class="container_text">
            "Introducirse en el uso de las tecnologías necesarias para realizar sitios web dinámicos (MySQL + PHP)."
            <ul>
              <li>Duracion: <?php echo time . " semanas"; ?> </li>
              <li>Precio: <?php echo "ARS " . $price; ?> </li>
              <li>Fecha de inicio: <?php echo $date[0]; ?> </li>
            </ul>
          </div>
           <a class="button" href="https://sceu.frba.utn.edu.ar/e-learning/detalle/curso/2121/php-y-my-sql-inicial" target="_blank" >Comprar</a>
        </div>
        <!--2-->
        <div class="cards card2">
          <div class= "container_data">
            <img src="img/logo.png" alt="logo image" class="logo">
            <div>
                <div class="name">PHP y MySQL Intermedio</div> 
                <div class="tag" >Descripcion</div>
            </div>
          </div>
          <div class="container_text">
            "Avanzar en el uso de las tecnologías necesarias para realizar sitios web dinámicos (MySQL + PHP)."
            <ul>
              <li>Duracion: <?php echo time . " semanas"; ?> </li>
              <li>Precio: <?php echo "ARS " . $price + 1000; ?> </li>
              <li>Fecha de inicio: <?php echo $date[1]; ?> </li>
            </ul>
          </div>
          <a class="button" href="https://sceu.frba.utn.edu.ar/e-learning/detalle/curso/2123/php-y-my-sql-intermedio" target="_blank" >Comprar</a>
        </div>
        <!--3-->
        <div class="cards card3">
          <div class= "container_data">
            <img src="img/logo.png" alt="logo image" class="logo">
            <div>
                <div class="name">PHP y MySQL Avanzado</div> 
                <div class="tag" >Descripcion</div>
            </div>
          </div>
          <div class="container_text">
            "Profundizar los conocimientos alcanzados en el uso de las tecnologías necesarias para realizar sitios web dinámicos (MySQL + PHP)."
            <ul>
              <li>Duracion: <?php echo time . " semanas"; ?> </li>
              <li>Precio: <?php echo "ARS " . $price + 2000; ?> </li>
              <li>Fecha de inicio: <?php echo $date[2]; ?> </li>
            </ul>
          </div>
          <a class="button" href="https://sceu.frba.utn.edu.ar/e-learning/detalle/curso/2125/php-y-my-sql-avanzado" target="_blank" >Comprar</a>
        </div>
      
    </div>

    <!--///////////////////////////////////////////////////////////////////////////////-->
    <div class="attribution"> 
      Coded by <a href="https://www.linkedin.com/in/santiago-mart%C3%ADnez-695142160/" target="_blank" >SAMO</a>.
    </div>
  </body>
</html>
