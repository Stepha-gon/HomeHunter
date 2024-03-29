<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Guía para la decoración de tu hogar</h1>
      <picture>
        <source srcset="src/img/destacada2.webp" type="image/webp" />
        <img loading="lazy" src="src/img/destacada2.jpg" alt="imagen del blog" />
      </picture>
      <p class="fecha-entrada">
        Escrito el: <span> 15/03/2024</span> Autor: <span>Stephanie Gonzalez</span>
      </p>
      <p>
        Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et
        nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc
        porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non
        risus. Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit.
        Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie.
        Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero
        vel est. Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti.
        Ut sit amet convallis nisi. Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue.
        Praesent ac enim lorem. Quisque ac dignissim sem, non condimentum orci. Morbi a iaculis
        neque, ac euismod felis. Fusce augue quam, fermentum sed turpis nec, hendrerit dapibus ante.
        Cras mattis laoreet nibh, quis tincidunt odio fermentum vel. Nulla facilisi.
      </p>
    </main>

    <?php
    
      incluirTemplate('footer');
    ?>
   
