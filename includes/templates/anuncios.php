<?php
require __DIR__ . "/../config/database.php";
$db = conectarDB();


$consulta = "SELECT * FROM propiedades LIMIT $limite";
$propiedades = mysqli_query($db, $consulta);

?>
<div class="contenedor-anuncios">

    <?php foreach ($propiedades as $propiedad) : ?>
        <div class="anuncio">

            <img class="imagen-anuncio" loading="lazy" src="/bienesraices/imagenes/<?=$propiedad["imagen"]?>" alt="imagen propiedad">

            <div class="contenido-anuncio">
                <h3><?= $propiedad["titulo"] ?></h3>
                <p><?= $propiedad["descripcion"] ?></p>
                <p class="precio">$<?= $propiedad["precio"] ?></p>

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

                <a class="boton-amarillo-block" href="anuncio.php?id=<?=$propiedad["id"]?>">
                    Ver Propiedad
                </a>
            </div> <!-- .contenido-anuncio -->
        </div><!-- .anuncio -->
    <?php endforeach; ?>

</div><!-- .contenedor-anuncios -->