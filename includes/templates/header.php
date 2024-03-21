<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/build/css/app.css" />
    <title>HomeHunter</title>
  </head>
  <body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="index.php">
            <img src="/src/img/logo.svg" alt="logotipo compania" />
          </a>
          <div class="mobile-menu">
            <img src="/src/img/barras.svg" alt="icono menu responisve" />
          </div>
          <div class="derecha">
            <img class="dark-mode-boton" src="/src/img/dark-mode.svg" alt="modo nocturno" />
            <nav class="navegacion">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            </nav>
          </div>
        </div>
        <?php if($inicio){ ?>
            <h1>Venta de Casas y Apartamentos de lujo</h1>
        <?php } ?>
        
      </div>
    </header>