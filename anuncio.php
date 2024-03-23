<?php

  //*obtener valores y validarlos 
  $id=$_GET['id'];
  $id=filter_var($id,FILTER_VALIDATE_INT);
  if(!$id){
    header('Location: /');
  }

  //*importar conexion base de datos

  require 'includes/config/database.php';
  $db=conectarDB();

  //*consulta

  $consulta="SELECT * FROM propiedades WHERE id=$id";
  $resultadoConsulta=mysqli_query($db,$consulta);
  if(!$resultadoConsulta->num_rows){
    header('Location: /');
  }
  $propiedad=mysqli_fetch_assoc($resultadoConsulta);

  //*obtener resultado


  $resultadoConsulta=mysqli_query($db,$consulta);

  //.template
  require 'includes/funciones.php';
  incluirTemplate('header');

  

  

    
?>

    <main class="contenedor seccion contenido-centrado">
      <h1><?php echo $propiedad['titulo'] ?></h1>
      <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen'] ?> " alt="Imagen de la casa en venta" />
      <p class="precio"><?php echo $propiedad['precio'] ?>COP</p>
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
      <p>
        <?php echo $propiedad['descripcion'] ?>
      </p>
    </main>

    <?php
      mysqli_close($db);
      incluirTemplate('footer');
    ?>
  
