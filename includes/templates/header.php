<?php 

if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION["login"] ?? false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
</head>
<body>
    
    <header class="header  <?php echo $inicio ? 'inicio' : "" ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">

                <a href="/bienesraices/">
                    <img src="/bienesraices/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono resposive">
                </div>
                
                <div class="derecha">
                    <img src="/bienesraices/build/img/dark-mode.svg" alt="icono dark mode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="/bienesraices/nosotros.php">Nosotros</a>
                        <a href="/bienesraices/anuncios.php">Anuncios</a>
                        <a href="/bienesraices/blog.php">Blog</a>
                        <a href="/bienesraices/contacto.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/bienesraices/logout.php">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>
                

            </div><!--.barra -->

            <?php if($inicio): ?>
                <h1>
                    Venta de Casas y Departamentos Exclusivos de Lujo
                </h1>
            <?php endif; ?>
           
        </div> 
    </header>