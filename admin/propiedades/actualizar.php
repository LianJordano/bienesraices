<?php

//Validar que sea un id valido
$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header("Location: /bienesraices/admin");
}

require("../../includes/config/database.php");
$db = conectarDB();

$consulta = "SELECT * FROM vendedores";
$vendedores = mysqli_query($db, $consulta);

$consulta = "SELECT * FROM propiedades WHERE id=$id";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

//Errores array
$errores = [];

$titulo = $propiedad["titulo"];
$precio = $propiedad["precio"];
$descripcion = $propiedad["descripcion"];
$habitaciones = $propiedad["habitaciones"];
$wc = $propiedad["wc"];
$estacionamiento= $propiedad["estacionamiento"];
$vendedorId = $propiedad["vendedores_id"];
$imagenPropiedad = $propiedad["imagen"];


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $wc = mysqli_real_escape_string($db, $_POST["wc"]);
    $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
    $vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);
    $creado = date("Y/m/d");
    $imagen = $_FILES["imagen"];
    
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


    //Validar por tamaño 100kb max
    $medida = 1000 * 2000;

    if($imagen["size"] > $medida){
        $errores[] = "La imagen es demasiado pesada";
    }

    //Insertar
    if(empty($errores)){

        $carpetaImagenes ="../../imagenes/";
        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }

        $nombreImagen="";

        if($imagen["name"]){
            unlink($carpetaImagenes . $propiedad["imagen"]);

            $extension = pathinfo($imagen["name"], PATHINFO_EXTENSION);
            $nombreImagen = md5(uniqid(rand(), true ) ).".".$extension;
        }else{
            $nombreImagen = $propiedad["imagen"];
        }

        //Subir imagen
        move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);

        $query = "UPDATE propiedades SET titulo='$titulo',precio=$precio,imagen='$nombreImagen', descripcion='$descripcion', habitaciones='$habitaciones', wc='$wc',estacionamiento='$estacionamiento', vendedores_id =$vendedorId WHERE id=$id";

        $resultado = mysqli_query($db, $query);
    
        if ($resultado) {
            header("Location: /bienesraices/admin?resultado=2");
        }
    }
   
}

require("../../includes/funciones.php");
incluirTemplate("header");
?>


<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>
    <a href="/bienesraices/admin/" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        
        <div class="alerta error">
            <?= $error; ?>
        </div>

    <?php endforeach;?>
    

    <form method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo*</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad" value="<?=$titulo?>">

            <label for="precio">Precio*</label>
            <input type="number" step="any" name="precio" id="precio" placeholder="Precio de la propiedad" value="<?=$precio?>">

            <label for="imagen">Imagen*</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

            <img src="/bienesraices/imagenes/<?=$propiedad["imagen"]?>" alt="imagen de la propiedad" class="imagen-small">

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

        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">

    </form>


</main>



<?php incluirTemplate("footer");  ?>