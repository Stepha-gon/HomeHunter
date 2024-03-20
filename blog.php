<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Nuestro Blog</h1>

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
            <p class="fecha-entrada">
              Escrito el: <span>15/03/2024 </span> Autor: <span>Stephanie Gonzalez</span>
            </p>
            <p>
              Consejos para construir una terraza en el techo de tu casa con los mejores materiales
              y un mayor ahorro de dinero.
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
            <p class="fecha-entrada">
              Escrito el: <span> 15/03/2024</span> Autor: <span>Stephanie Gonzalez</span>
            </p>
            <p>
              Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
              para darle vida a tu espacio
            </p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="src/img/blog3.webp" type="image/wepb" />
            <img loading="lazy" src="src/img/blog3.jpg" alt="texto entrada blog" />
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="fecha-entrada">
              Escrito el: <span>15/03/2024 </span> Autor: <span>Stephanie Gonzalez</span>
            </p>
            <p>
              Consejos para construir una terraza en el techo de tu casa con los mejores materiales
              y un mayor ahorro de dinero.
            </p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="src/img/blog4.webp" type="image/wepb" />
            <img loading="lazy" src="src/img/blog4.jpg" alt="texto entrada blog" />
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="fecha-entrada">
              Escrito el: <span> 15/03/2024</span> Autor: <span>Stephanie Gonzalez</span>
            </p>
            <p>
              Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
              para darle vida a tu espacio
            </p>
          </a>
        </div>
      </article>
    </main>

   <?php
    
      incluirTemplate('footer');
    ?>

