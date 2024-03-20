<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Casa con vista al Bosque</h1>
      <picture>
        <source srcset="src/img/destacada.webp" type="image/webp" />
        <img loading="lazy" src="src/img/destacada.jpg" alt="Imagen de la casa en venta" />
      </picture>
      <p class="precio">1250'000.000 COP</p>
      <ul class="iconos-caracteristicas">
        <li>
          <img loading="lazy" src="src/img/icono_wc.svg" alt="icono wc" />
          <p>3</p>
        </li>
        <li>
          <img loading="lazy" src="src/img/icono_estacionamiento.svg" alt="icono wc" />
          <p>4</p>
        </li>
        <li>
          <img loading="lazy" src="src/img/icono_dormitorio.svg" alt="icono wc" />
          <p>5</p>
        </li>
      </ul>
      <p>
        Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et
        nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc
        porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non
        risus. Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit.
        Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie.
        Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero
        vel est. Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti.
        Ut sit amet convallis nisi.
      </p>
    </main>

    <?php
    
      incluirTemplate('footer');
    ?>
  
