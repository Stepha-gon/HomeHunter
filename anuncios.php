<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor">
      <section class="seccion contenedor">
      <h2>Casas y Apartamentos en venta</h2>
      <?php 
        $limite=20;
        include 'includes/templates/anuncios.php';
      ?>
    </main>

    <?php
    
      incluirTemplate('footer');
    ?>
 
