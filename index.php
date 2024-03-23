<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header',$inicio=true);
    
?>

    <main class="contenedor">
      <h1>Servicios HomeHunter</h1>

      <div class="iconos-nosotros">
        <div class="icono">
          <img src="src/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
          <h3>Seguridad</h3>
          <p>
            pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost macheta
            standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a luat o
            planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru literele
            respective.
          </p>
        </div>
        <div class="icono">
          <img src="src/img/icono2.svg" alt="Icono seguridad" loading="lazy" />
          <h3>Precio</h3>
          <p>
            este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost
            macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a
            luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru
            literele respective.
          </p>
        </div>
        <div class="icono">
          <img src="src/img/icono3.svg" alt="Icono seguridad" loading="lazy" />
          <h3>Tiempo</h3>
          <p>
            este pur şi simplu o machetă pentru text a industriei tipografice. Lorem Ipsum a fost
            macheta standard a industriei încă din secolul al XVI-lea, când un tipograf anonim a
            luat o planşetă de litere şi le-a amestecat pentru a crea o carte demonstrativă pentru
            literele respective.
          </p>
        </div>
      </div>
    </main>

    <section class="seccion contenedor">
      <h2>Casas y Apartamentos en venta</h2>
      <?php 
      $limite=3;
      include 'includes/templates/anuncios.php';
      ?>
      <div class="alinear-derecha">
        <a class="boton-verde" href="anuncios.php">Ver Todas</a>
      </div>
    </section>

    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>
        Llena el formulario de contacto y un asesor se pondra en contacto contigo lo más pronto
        posible
      </p>
      <a class="boton-amarillo centrar" href="contacto.html">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="src/img/blog1.webp" type="image/wepb" />
              <img loading="lazy" src="src/img/blog1.jpg" alt="texto entrada blog" />
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.html">
              <h4>Terraza en el techo de tu casa</h4>
              <p class="fecha-entrada">Escrito el: <span>15/03/2024 </span> Autor: <span>Stephanie Gonzalez</span></p>
              <p>
                Consejos para construir una terraza en el techo de tu casa con los mejores
                materiales y un mayor ahorro de dinero.
              </p>
            </a>
          </div>
        </article>
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="src/img/blog2.webp" type="image/wepb" />
              <img loading="lazy" src="src/img/blog2.jpg" alt="texto entrada blog" />
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.html">
              <h4>Guía para la decoración de tu hogar</h4>
              <p class="fecha-entrada">Escrito el: <span> 15/03/2024</span> Autor: <span>Stephanie Gonzalez</span></p>
              <p>
                Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
                para darle vida a tu espacio
              </p>
            </a>
          </div>
        </article>
      </section>
      <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            El personal se comportó de una excelente forma, muy buena atención y la casa que me
            ofrecieron cumple con todas mis expectativas.
          </blockquote>
          <p>-Stephanie Gonzalez</p>
        </div>
      </section>
    </div>
    <?php
    
      incluirTemplate('footer');
    ?>

