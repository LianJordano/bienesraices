<?php
 require("includes/funciones.php");
 incluirTemplate("header", $inicio = false);
?>

    <main class="contenedor seccion">
    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>
            <?php $limite = 10; ?>
            <?php  include("includes/templates/anuncios.php"); ?>
    </section>
    </main>

   


    <?php incluirTemplate("footer");  ?>
