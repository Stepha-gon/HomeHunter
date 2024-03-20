<?php


//base datos
  require '../../includes/config/database.php';

  $db=conectarDB();

  require '../../includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor">
      <h1>Crear</h1>
      <a href="/homehunter/admin/index.php" class="boton boton-verde" > Volver</a>

      <form class="formulario">
        <fieldset>
            <legend>Informacion General </legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo propiedad">

            <label for="precio">precio:</label>
            <input type="number" id="precio" placeholder="Precio propiedad">

            <label for="imagen">imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png, image/jpg">

            <label for="descripcion">descripcion:</label>
            <textarea  id="descripcion"></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" max=10 min=0 placeholder="Ej:1" id="habitaciones">
            <label for="wc">Baños:</label>
            <input type="number" max=10 min=0 placeholder="Ej:1" id="wc">
            <label for="estacionamiento">Estacionamientos:</label>
            <input type="number" max=10 min=0 placeholder="Ej:1" id="estacionamiento">
        </fieldset>

        <fieldset>
            <Legend>Vendedor</Legend>
            <select>
                <option value="1">Stephanie</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
      </form>
    </main>

    <?php
    
      incluirTemplate('footer');
    ?>
    