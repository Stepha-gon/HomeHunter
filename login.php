<?php
require 'includes/funciones.php';
incluirTemplate('header');

//*conexion base de datos

require 'includes/config/database.php';
$db=conectarDB();

$errores=[];
$email='';


//* Autenticar el usuario

if($_SERVER['REQUEST_METHOD']==='POST'){
    
    
    $email=mysqli_real_escape_string($db,filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))  ;
    $password=mysqli_real_escape_string($db,$_POST['password']);
    if(!$email){
        $errores[]="el email es obligatorio y debe ser valido";
        
    }
    if(!$password){
        $errores[]="la contraseña es obligatoria";
    }
    
    
    if(empty($errores)){
        //Revisar si el usuario existe
        $consulta= "SELECT * FROM usuarios WHERE email='$email'";
        $resultadoConsulta= mysqli_query($db, $consulta);
        
        if($resultadoConsulta->num_rows){
            //revisar el password coincide
            $usuario=mysqli_fetch_assoc($resultadoConsulta);

            //verificar si el password es correcto

            $auth= password_verify($password, $usuario['password'] );
            if($auth){
                //el usuario esta autenticado
                session_start();
                $_SESSION['usuario']=$usuario['email'];
                $_SESSION['login'] = true;
                header('Location: /admin');
            }else{
                $errores[]='El password es incorrecto';
            }

        } else {
            $errores[]="El usuario no existe";
        }
        
    }
}

?>

<main class="contenedor contenido-centrado">
<h1>Login</h1>
<?php foreach($errores as $error): ?> 
    <div class="alerta error">
    <?php echo $error?>
    </div>
    
    <?php endforeach; ?>
    
    <form class="formulario " method="POST" novalidate>
    <fieldset>
    <legend>Email y Password</legend>
    
    <label for="email">E-mail</label>
    <input type="email" name="email" placeholder="Tu E-mail" id="email" value=<?php echo $email; ?> >
    <label for="password">password</label>
    <input type="password" name="password" placeholder="Tu password" id="password"  />
    <input type="submit"  class="boton boton-verde-block" value="Iniciar Sesión" >
    </fieldset>
    
    </form>
    </main>
    
    <?php
    
    incluirTemplate('footer');
    ?>
    
    