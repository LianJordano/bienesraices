<?php
 require("includes/funciones.php");
 incluirTemplate("header", $inicio = true);
?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$500.000.000</p>

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
                            <img class="icono"  loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitacione">
                            <p>4</p>
                        </li>
                    </ul>

                    <a class="boton-amarillo-block" href="anuncios.php">
                        Ver Propiedad
                    </a>
                </div> <!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con diseño modernom asi como tecnologia inteligente y amueblada</p>
                    <p class="precio">$700.000.000</p>

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

                    <a class="boton-amarillo-block" href="anuncios.php">
                        Ver Propiedad
                    </a>
                </div> <!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$1.000.000.000</p>

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

                    <a class="boton-amarillo-block" href="anuncios.php">
                        Ver Propiedad
                    </a>
                </div> <!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

        </div><!-- .contenedor-anuncios -->
        
        <div class="alinear-derecha">
            <a class="boton-verde" href="anuncios.php"> Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a class="boton-amarillo" href="contacto.php">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                        <p>
                          Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio 
                        </p>
                    </a>
                </div>

            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Julian Jordan</p>
            </div>
        </section>

    </div>


    <?php incluirTemplate("footer");  ?>