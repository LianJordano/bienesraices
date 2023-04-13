<?php
 require("includes/funciones.php");
 incluirTemplate("header", $inicio = false);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$350.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitacione">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, voluptas voluptate mollitia tempora ipsam eligendi architecto voluptatibus error nostrum voluptatum laudantium eaque quibusdam consequatur esse fugit sint! Id, laboriosam dolor.
            Veritatis suscipit maiores delectus adipisci inventore commodi consequatur, nemo quos sed ea. Ipsa, voluptate accusantium. Obcaecati maiores facilis dolor voluptas, totam aperiam incidunt odio ducimus voluptates, impedit, cum a repellendus?
            A incidunt unde necessitatibus quaerat officia soluta deleniti alias. Consequuntur, ipsam, mollitia ducimus sed adipisci odio consectetur repudiandae sit sapiente, placeat molestias fugit aliquid delectus totam possimus nostrum fuga saepe?
            Quaerat modi dolorum unde quasi! Ex, libero. Doloribus veritatis obcaecati corporis, rem, adipisci, tenetur soluta sit tempora placeat eius asperiores earum dolor iusto esse nostrum commodi voluptas corrupti accusantium ratione!
            Accusantium incidunt modi expedita natus eligendi reiciendis rerum ullam recusandae possimus quia perspiciatis, ut optio. Fugit voluptatibus itaque debitis sapiente maxime vel nesciunt minus numquam, sequi perspiciatis accusamus molestiae deserunt?
            Commodi totam quasi voluptatum tenetur sequi impedit blanditiis, expedita libero id delectus voluptate ab minima culpa aperiam facere quam vero, quae, minus illum adipisci et. Omnis quas eius porro iusto!
            Non sint molestias reiciendis vitae rerum asperiores odio eveniet dignissimos possimus quae laudantium corporis vel aperiam odit eius quaerat aut nobis, tenetur iste debitis? Minima at eius possimus harum quae!
            Eaque ullam blanditiis accusamus distinctio reiciendis corrupti natus. Voluptate laborum ipsa cumque harum id minima, ratione ea unde laboriosam doloremque odit, sunt error sed, magni deleniti perspiciatis deserunt vero placeat.</p>
        </div>
    </main>



    <?php incluirTemplate("footer");  ?>