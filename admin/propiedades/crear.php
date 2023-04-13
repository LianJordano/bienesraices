<?php
require("../../includes/config/database.php");
$db = conectarDB();

//Errores array

$errores = [];

$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento= "";
$vendedorId = "";

$consulta = "SELECT * FROM vendedores";
$vendedores = mysqli_query($db, $consulta);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
    $vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);
    $creado = date("Y/m/d");

    if (!$titulo) {
        $errores["titulo"] = "El campo titulo no debe estar vacio";
    }

    if (!$precio) {
        $errores["precio"] = "El campo precio no debe estar vacio";
    }

    if (!$descripcion) {
        $errores["descripcion"] = "El campo descripcion no debe estar vacio";
    }

    if (!$habitaciones) {
        $errores["habitaciones"] = "El campo habitaciones no debe estar vacio";
    }

    if (!$wc) {
        $errores["wc"] = "El campo baños no debe estar vacio";
    }

    if (!$estacionamiento) {
        $errores["estacionamiento"] = "El campo estacionamiento no debe estar vacio";
    }

    if (!$vendedorId) {
        $errores["vendedor"] = "El campo vendedor no debe estar vacio";
    }

    if(empty($errores)){
        $query = "INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,creado,vendedores_id) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamiento','$creado',$vendedorId ) ";

        $resultado = mysqli_query($db, $query);
    
        if ($resultado) {
            header("Location: /bienesraices/admin");
        }
    }
    //Insertar
   
}

require("../../includes/funciones.php");
incluirTemplate("header");
?>


<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/bienesraices/admin/" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        
        <div class="alerta error">
            <?= $error; ?>
        </div>

    <?php endforeach;?>
    

    <form action="" method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo*</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad" value="<?=$titulo?>">

            <label for="precio">Precio*</label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" value="<?=$precio?>">

            <label for="imagen">Imagen*</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion*</label>
            <textarea name="descripcion" id="descripcion"><?=$descripcion?></textarea>

        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones*</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="12" value="<?=$habitaciones?>">

            <label for="wc">Baños*</label>
            <input type="number" name="wc" id="wc" placeholder="Ej: 1" min="1" max="12" value="<?=$wc?>">

            <label for="estacionamiento">Estacionamiento*</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 1" min="1" max="12" value="<?=$estacionamiento?>">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option value="" selected >-- Seleccione un vendedor --</option>
                <?php foreach ($vendedores as $vendedor): ?>
                    <option value="<?=$vendedor["id"]?>" <?php echo $vendedor["id"]=== $vendedorId ? "selected" :""; ?> ><?=$vendedor["nombre"]." ".$vendedor["apellido"]; ?></option>

                <?php endforeach;?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>


</main>



<?php incluirTemplate("footer");  ?>