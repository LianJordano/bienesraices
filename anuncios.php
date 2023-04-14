<?php
 require("includes/funciones.php");
 incluirTemplate("header", $inicio = false);
?>

    <main class="contenedor seccion">
        <h2>Casas y Departamentos en Venta</h2>
        <div class="contenedor-anuncios">
            <?php $limite = 10; ?>
            <?php  include("includes/templates/anuncios.php"); ?>
        </div><!-- .contenedor-anuncios -->
    </main>


    <?php incluirTemplate("footer");  ?>
