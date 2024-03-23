<?php

  //*incluir template
  require '../includes/funciones.php';
  $auth=estaAutenticado();
  //. Inicio de sesion
  if(!$auth){
    header('Location:/');
  }
  //* importar conexion
  require '../includes/config/database.php';
  $db=conectarDB();


  //*escribir Query
  $query="SELECT * FROM propiedades";

  //*consultar base de datos
  $resultadoConsulta=mysqli_query($db,$query);

  //*muestra mensaje de exito
  $resultado=$_GET['resultado'] ?? null;

  if($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);

      
     if($id){
      //*eliminar archivo
      $query="SELECT imagen FROM propiedades WHERE id=$id";
      $resultadoEliminarImagen=mysqli_query($db,$query);
      $propiedadImagen=mysqli_fetch_assoc($resultadoEliminarImagen);

      unlink('../imagenes/'. $propiedadImagen['imagen']);



      //*eliminar propiedad
       $query="DELETE FROM propiedades WHERE id=$id";
       $resultadoEliminar=mysqli_query($db,$query);

       if($resultadoEliminar){
        header('Location: /admin?resultado=3');
       }
     }
  }


  
  incluirTemplate('header');
    
?>

    <main class="contenedor">
      <h1>Administrador HomeHunter</h1>
      <?php if(intval($resultado)===1): ?>
        <p class="alerta exito">Anuncio Creado Correctamente </p>
      <?php elseif(intval($resultado)===2): ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente </p>
      <?php elseif(intval($resultado)===3): ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente </p>
      <?php endif; ?>
      <a href="/admin/propiedades/crear.php" class="boton boton-verde" > Nueva Propiedad</a>

      <table class="propiedades"> 
         <!-- Mostrar resultados -->
        <thead>
          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody> 
          <!-- aqui va el codigo de la base de datos -->
          <?php while ($propiedad=mysqli_fetch_assoc($resultadoConsulta)): ?>
          <tr>
            <td><?php echo $propiedad['id']; ?> </td>
            <td> <?php echo $propiedad['titulo']; ?> </td>
            <td><img src="/imagenes/<?php echo $propiedad['imagen'];?>"  class="imagen-tabla"></td>
            <td>$ <?php echo $propiedad['precio']; ?></td>
            <td>
              <form method="POST" class="w-100"> 
                <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
                <input type="submit" class="boton-rojo-block" value="Eliminar"></input>
              </form>
              
              <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo">Actualizar</a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      <a href="../cerrar-sesion.php" class="boton boton-rojo" > Cerrar sesion</a>
    </main>

    <?php
      //*cerrar conexion
            mysqli_close($db);
      
      incluirTemplate('footer');
    ?>
    