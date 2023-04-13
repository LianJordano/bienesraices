<?php
 require("includes/funciones.php");
 incluirTemplate("header", $inicio = false);
?>

    <main class="contenedor seccion">
      <h1>Conoce Sobre Nosotros</h1>

      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              loading="lazy"
              src="build/img/nosotros.jpg"
              alt="Imagen sobre nosotros"
            />
          </picture>
        </div>

        <div class="texto-nosotros">
          <blockquote>25 Años de experiencia</blockquote>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
            fuga voluptatem officiis asperiores perspiciatis dignissimos. In
            rerum pariatur, reiciendis iste quo, dolores beatae sequi fugit
            consequuntur voluptate commodi similique quidem. Fuga ex, rerum
            esse?
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
            totam tenetur dolorem facilis repellat. Et laboriosam nam veniam
            dolor quibusdam, corrupti culpa corporis ullam beatae laudantium
            pariatur provident officia ab! Perspiciatis aliquam culpa, fuga
            consequuntur unde atque vero sapiente? Repudiandae ad illum facere
            qui, eius, aspernatur earum maxime, ipsa quisquam culpa vel eos
            nihil exercitationem dolore autem reiciendis veritatis cumque.
          </p>
        </div>
      </div>
    </main>


    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">

            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam distinctio suscipit sequi recusandae iusto, architecto illo ea ipsum ut et officia dolorum, error labore repudiandae eligendi omnis aut harum veniam.
                Eaque quibusdam similique voluptatum fugiat id excepturi, harum nesciunt repellat, veniam vitae veritatis at pariatur laboriosam facilis atque ducimus placeat impedit voluptate consequatur obcaecati, quisquam temporibus .</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam distinctio suscipit sequi recusandae iusto, architecto illo ea ipsum ut et officia dolorum, error labore repudiandae eligendi omnis aut harum veniam.
                Eaque quibusdam similique voluptatum fugiat id excepturi, harum nesciunt repellat, veniam vitae veritatis at pariatur laboriosam facilis atque ducimus placeat impedit voluptate consequatur obcaecati, quisquam temporibus .</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam distinctio suscipit sequi recusandae iusto, architecto illo ea ipsum ut et officia dolorum, error labore repudiandae eligendi omnis aut harum veniam.
                Eaque quibusdam similique voluptatum fugiat id excepturi, harum nesciunt repellat, veniam vitae veritatis at pariatur laboriosam facilis atque ducimus placeat impedit voluptate consequatur obcaecati, quisquam temporibus .</p>
            </div>

        </div>
    </section>

    <?php incluirTemplate("footer");  ?>
