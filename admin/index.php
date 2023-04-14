<?php
require("../includes/config/database.php");
$db = conectarDB();

$consulta = "SELECT * FROM propiedades";
$propiedades = mysqli_query($db, $consulta);

//Mensaje condicional
$resultado = $_GET["resultado"] ?? null;

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id = $_POST["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){

        //Eliminar archivo
        $consulta = "SELECT imagen FROM propiedades WHERE id=$id";
        $resultado = mysqli_query($db, $consulta);
        $propiedad = mysqli_fetch_assoc($resultado);

        $carpetaImagenes ="../imagenes/";

        unlink($carpetaImagenes . $propiedad["imagen"]);

        $consulta = "DELETE FROM propiedades WHERE id=$id";
        $resultado = mysqli_query($db, $consulta);
        if($resultado){
            header("Location: /bienesraices/admin?resultado=3");
        }
    }
   
}

//Incluye template
require("../includes/funciones.php");
incluirTemplate("header", $inicio = false);
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    <?php if ($resultado == 1) : ?>
        <p class="alerta exito">La propiedad fue creada exitosamente</p>
    <?php elseif($resultado == 2): ?>
        <p class="alerta exito">La propiedad fue actualizada exitosamente</p>
    <?php elseif($resultado == 3): ?>
        <p class="alerta exito">La propiedad fue eliminada exitosamente</p>
    <?php endif; ?>

    <a href="propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>


    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($propiedades as $propiedad): ?>
            <tr>
                <td><?=$propiedad["id"]?></td>
                <td><?=$propiedad["titulo"]?></td>
                <td><img src="/bienesraices/imagenes/<?=$propiedad["imagen"]?>" alt="imagen propiedad" class="imagen-tabla"></td>
                <td>$ <?=$propiedad["precio"]?></td>
                <td>
                    <a class="boton-amarillo-block" href="/bienesraices/admin/propiedades/actualizar.php?id=<?=$propiedad["id"];?>">Actualizar</a>
                    <form method="POST" class="w-100">
                        <input type="hidden" name="id" value="<?=$propiedad["id"]?>">
                        <input class="boton-rojo-block" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>


<?php mysqli_close($db);  ?>
<?php incluirTemplate("footer");  ?>