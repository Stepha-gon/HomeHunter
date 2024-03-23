<?php
 


  //*importar conexion
  require 'includes/config/database.php';
  $db=conectarDB();

  //*Crear un usuario y password

  $email='correo@correo.com';
  $password='123456';
  $passwordHash=password_hash($password, PASSWORD_BCRYPT);
  

  //*query crear usuario

  $consulta= "INSERT INTO usuarios (email,password) VALUES('$email','$passwordHash');";
  //echo $consulta;
  exit;
  //*agregarlo a la base de datos
    mysqli_query($db,$consulta);
?>

