<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header');
    
?>

    <main class="contenedor">
      <h1>Contáctanos</h1>
      <picture>
        <source srcset="src/img/destacada3.webp" type="image/webp" />
        <img loading="lazy" src="src/img/destacada3.jpg" alt="imagen de contacto" />
      </picture>
      <h2>Llene el formulario de contacto</h2>

      <form class="formulario">
        <fieldset>
          <legend>Información personal</legend>
          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu nombre" id="nombre" />
          <label for="email">E-mail</label>
          <input type="email" placeholder="Tu E-mail" id="email" />
          <label for="telefono">Telefono</label>
          <input type="number" placeholder="Tu telefono" id="telefono" />
          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
          <legend>Información sobre la propiedad</legend>
          <label for="opciones">Que accion desea realizar?</label>
          <select id="opciones">
            <option value=" " disabled selected>--Seleccione</option>
            <option value="Comprar">Comprar</option>
            <option value="Vender">Vender</option>
          </select>
          <label for="precio"> Precio o Presupuesto</label>
          <input type="number" placeholder="ingresa tu presupuesto" id="precio" />
        </fieldset>
        <fieldset>
          <legend>Recibir Información</legend>
          <p>Como desea ser contactado</p>
          <div class="forma-contacto">
            <label for="contactar-telefono">Telefono</label>
            <input name="contacto" type="radio" value="Telefono" id="contactar-telefono" />
            <label for="contactar-email">Email</label>
            <input name="contacto" type="radio" value="E-mail" id="contactar-email" />
          </div>
          <p>Si eligió teléfono, elija la fecha y la hora</p>

          <label for="fecha-contacto">Fecha:</label>
          <input type="date" id="fecha-contacto" />
          <label for="hora-contacto">Hora:</label>
          <input type="time" id="hora-contacto" min="09:00" max="18:00" />
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde" />
      </form>
    </main>

    <?php
    
      incluirTemplate('footer');
    ?>
 