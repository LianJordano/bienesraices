<?php
 require("includes/funciones.php");
 incluirTemplate("header", $inicio = false);
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Entrada blog">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre*</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre">

                <label for="email">E-mail*</label>
                <input type="email" name="email" id="email" placeholder="Tu email">

                <label for="telefono">Teléfono*</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Tu telefono">

                <label for="mensaje">Mensaje*</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra*</label>
                <select name="opciones" id="opciones">
                    <option disabled selected value="">-- Seleccione --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto*</label>
                <input type="number" name="presupuesto" id="presupuesto" placeholder="Tu presupuesto">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="contacto" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" name="contacto" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora para ser contactado</p>

                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" >

                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora"  min="09:00" max="18:00" >

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>

    </main>


    <?php incluirTemplate("footer");  ?>
