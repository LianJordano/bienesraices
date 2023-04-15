<?php

$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header("Location: /bienesraices/");
}

require "includes/config/database.php";
$db = conectarDB();

$consulta = "SELECT * FROM propiedades WHERE id=$id";
$resultado = mysqli_query($db, $consulta);

if(!$resultado->num_rows){
    header("Location: /bienesraices/");
}

$propiedad = mysqli_fetch_assoc($resultado);




 require("includes/funciones.php");
 incluirTemplate("header", $inicio = false);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?=$propiedad["titulo"]?></h1>

            <img class="imagen-anuncio" loading="lazy" src="/bienesraices/imagenes/<?=$propiedad["imagen"]?>" alt="imagen de la propiedad">
   

        <div class="resumen-propiedad">
            <p class="precio">$<?=$propiedad["precio"]?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?=$propiedad["wc"]?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?=$propiedad["estacionamiento"]?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?=$propiedad["habitaciones"]?></p>
                </li>
            </ul>

            <p><?=$propiedad["descripcion"]?></p>
        </div>
    </main>



    <?php incluirTemplate("footer");  ?>
