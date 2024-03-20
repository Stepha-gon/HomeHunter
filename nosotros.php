<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor">
      <h1>Acerca de Nosotros</h1>
      <div class="nosotros-contenido">
        <picture>
          <source srcset="src/img/nosotros.webp" type="imagen/webp" />
          <img loading="lazy" src="src/img/nosotros.jpg" alt="Imagen nosotros" />
        </picture>
        <div class="nosotros-texto">
          <h2>25 Años de experiencia</h2>
          <p>
            Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis
            et nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor
            pulvinar. Nunc porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae
            sagittis lorem dolor non risus. Vivamus accumsan maximus est, eu mollis mi. Proin id
            nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor. Suspendisse lobortis
            dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna nisi
            fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur
            malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi. Aliquam
            lectus magna, luctus vel gravida nec, iaculis ut augue.
          </p>
        </div>
      </div>
    </main>

    <section class="contenedor seccion servicios-nosotros">
      <h1>Más Sobre Nosotros</h1>

      <div class="iconos-nosotros">
        <div class="icono">
          <img src="src/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
          <h3>Seguridad</h3>
          <p>
            Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur
            obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis
            laudantium. Voluptates?
          </p>
        </div>
        <div class="icono">
          <img src="src/img/icono2.svg" alt="Icono seguridad" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur
            obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis
            laudantium. Voluptates?
          </p>
        </div>
        <div class="icono">
          <img src="src/img/icono3.svg" alt="Icono seguridad" loading="lazy" />
          <h3>Tiempo</h3>
          <p>
            Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur
            obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis
            laudantium. Voluptates?
          </p>
        </div>
      </div>
    </section>

    <?php
    
      incluirTemplate('footer');
    ?>
    
