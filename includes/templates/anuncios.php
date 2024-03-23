
<?php 

    require 'includes/config/database.php';
    $db=conectarDB();

    $consulta= "SELECT * FROM propiedades LIMIT $limite";
    $resultadoConsulta=mysqli_query($db,$consulta);


?>





<div class="contenedor-anuncios">
    <?php while($propiedad=mysqli_fetch_assoc($resultadoConsulta)): ?> 
        <div class="anuncio">
          
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio" />
          
          <div class="contenido-anuncio">
            <h3><?php echo $propiedad['titulo'] ?></h3>
            <p><?php echo $propiedad['descripcion'] ?></p>
            <p class="precio"><?php echo $propiedad['precio'] ?> COP</p>

            <ul class="iconos-caracteristicas">
              <li>
                <img loading="lazy" src="src/img/icono_wc.svg" alt="icono wc" />
                <p><?php echo $propiedad['wc'] ?></p>
              </li>
              <li>
                <img loading="lazy" src="src/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
                <p><?php echo $propiedad['estacionamiento'] ?></p>
              </li>
              <li>
                <img loading="lazy" src="src/img/icono_dormitorio.svg" alt="icono habitaciones" />
                <p><?php echo $propiedad['habitaciones'] ?></p>
              </li>
            </ul>
            <a class="boton boton-amarillo" href="anuncio.php?id=<?php echo $propiedad['id'] ?>"> Ver propiedad </a>
          </div>
        </div>
    <?php endwhile; ?> 
      </div>

<?php 

//*cerrar conexion
        mysqli_close($db);
?>