<?php

//* obterner valores y validarlos


$id=$_GET['id'];
$id=filter_var($id,FILTER_VALIDATE_INT);
if(!$id){
  header('location: /admin');
}

//base datos


require '../../includes/config/database.php';

$db=conectarDB();

//*obtener info de la base de datos
$consultaPropiedades="SELECT * FROM propiedades WHERE id= $id ";
$resultadoPropiedades=mysqli_query($db,$consultaPropiedades);
$propiedad=mysqli_fetch_assoc($resultadoPropiedades);

$consulta="SELECT * FROM vendedores";
$resultadoConsulta=mysqli_query($db,$consulta);

require '../../includes/funciones.php';

incluirTemplate('header');


//*Mensaje de errores
$errores=[];

$titulo=$propiedad['titulo'];
$precio=$propiedad['precio'];
$descripcion=$propiedad['descripcion'];
$habitaciones=$propiedad['habitaciones'];
$wc=$propiedad['wc'];
$estacionamiento=$propiedad['estacionamiento'];
$vendedores_id=$propiedad['vendedores_id'];
$imagenPropiedad=$propiedad['imagen'];

//* almacenar en base de datos
if($_SERVER['REQUEST_METHOD']==='POST'){
   
  $titulo=mysqli_real_escape_string ($db, $_POST['titulo']);
  $precio=mysqli_real_escape_string ($db,$_POST['precio']);
  $descripcion=mysqli_real_escape_string ($db,$_POST['descripcion']);
  $habitaciones=mysqli_real_escape_string ($db,$_POST['habitaciones']);
  $wc=mysqli_real_escape_string ($db,$_POST['wc']);
  $estacionamiento=mysqli_real_escape_string ($db,$_POST['estacionamiento']);
  $vendedores_id=mysqli_real_escape_string ($db,$_POST['vendedor']);
  $creado=date('Y/m/d');
 //* asignar files hacia una variable
  $imagen=$_FILES['imagen'];

  //validar por tamaño 1mb max 

  $medida=1000*1000;

  
  
  if(!$titulo){
    $errores[]="debes añadir un titulo";
  }
  if(!$precio){
    $errores[]="El precio es obligatorio";
  }
 
  if($imagen['size']>$medida){
    $errores[]="La imagen es demasiado pesada";
  }
  if(strlen($descripcion)<50){
    $errores[]="Añade una descripcion de la propiedad de al menos 50 caracteres";
  }
  if(!$habitaciones){
    $errores[]="Número de habitaciones es obligatorio";
  }
  if(!$wc){
    $errores[]="Número de baños es obligatorio";
  }
  if(!$estacionamiento){
    $errores[]="Número de estacionamientos es obligatorio";
  }
  
  if(!$vendedores_id){
    $errores[]="Debe elegir un vendedor";
  }

  //* Validar que no hayan errores array=null
  
  if(empty($errores)){

    
    //*subida de archivos por medio de la creacion de una carpeta

     $carpetaImagenes='../../imagenes/';
     //. crear directorio

     if(!is_dir($carpetaImagenes)){
       mkdir($carpetaImagenes);

     }
    $nombreImagen=''; 

     //* verificar la existencia de una imagen previa para eliminarla del servidor
    if($imagen['name']){
      //,si si hay imagen previa eliminarla del servidor
      unlink($carpetaImagenes . $propiedad['imagen']);
      //* Generar nombres unicos de imagenes

     $nombreImagen=md5 (uniqid(rand(),true)). ".jpg";
    
     //*subir imagen
     move_uploaded_file($imagen['tmp_name'],$carpetaImagenes . $nombreImagen );
    //* Insertar en la base de datos
    }else {
      $nombreImagen=$propiedad['imagen'];
    }

     
    
    $query=" UPDATE propiedades SET titulo= '$titulo', precio= '$precio', imagen='$nombreImagen',  descripcion= '$descripcion', habitaciones= $habitaciones, wc= $wc, estacionamiento= $estacionamiento, vendedores_id= $vendedores_id WHERE id= $id";
    
    //echo $query;
   
    
    $resultado=mysqli_query($db, $query);
    if($resultado){
      //redireccionar al usuario

      header('Location: /admin?resultado=2');
    }
  }

}
?>
<main class="contenedor">
<h1>Actualizar Registro</h1>
<a href="/admin/index.php" class="boton boton-verde" > Volver</a>

<?php foreach($errores as $error): ?>
  <div class="alerta error">
  <?php echo $error; ?>
  </div>
  
  <?php endforeach; ?> 
  
  <form class="formulario" method="POST"  enctype="multipart/form-data">
  <fieldset>
  <legend>Informacion General </legend>
  <label for="titulo">Titulo:</label>
  <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value=<?php echo $titulo; ?> >
  
  <label for="precio">precio:</label>
  <input type="number" id="precio" name="precio" placeholder="Precio propiedad" value=<?php echo $precio; ?> >
  
  <label for="imagen">imagen:</label>
  <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/jpg">


  <img src="/imagenes/<?php echo $imagenPropiedad;?>" class="imagen-small">
  
  <label for="descripcion">descripcion:</label>
  <textarea  id="descripcion" name="descripcion" ><?php echo $descripcion; ?></textarea>
  
  </fieldset>
  
  <fieldset>
  <legend>Informacion propiedad</legend>
  <label for="habitaciones">Habitaciones:</label>
  <input type="number" max=10 min=0 placeholder="Ej:1" id="habitaciones" name="habitaciones" value=<?php echo $habitaciones; ?>>
  <label for="wc">Baños:</label>
  <input type="number" max=10 min=0 placeholder="Ej:1" id="wc" name="wc" value=<?php echo $wc; ?>>
  <label for="estacionamiento">Estacionamientos:</label>
  <input type="number" max=10 min=0 placeholder="Ej:1" id="estacionamiento" name="estacionamiento" value=<?php echo $estacionamiento; ?>>
  </fieldset>
  
  <fieldset>
  <Legend>Vendedor</Legend>
  <select name="vendedor">
  <option value=""> --Seleccione--</option>
  <?php while ($row=mysqli_fetch_assoc($resultadoConsulta)):?>
    <option <?php echo $vendedores_id === $row['id'] ? 'selected' : '' ;?> value="<?php echo $row['id'];?>"> <?php echo $row['nombre'] . " " . $row['apellido'] ?>
    <?php endwhile; ?>
    </select>
    </fieldset>
    <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>
    </main>
    
    <?php
    
    incluirTemplate('footer');
    ?>
    