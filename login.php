<?php
// Autenticar usuario
require "includes/config/database.php";
$db = conectarDB();

$errores = [];

if($_SERVER["REQUEST_METHOD"] ==="POST"){

    $email =   filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if(!$email){
        $errores[] = "El email es obligatorio o no es valido";
    }

    if(!$password){
        $errores[] = "La contraseña es obligatoria";
    }

    if(empty($errores)){

        $consulta = "SELECT * FROM usuarios WHERE email ='$email' ";
        $resultado = mysqli_query($db,$consulta);
        var_dump($resultado);

        if($resultado->num_rows){
            $usuario = mysqli_fetch_assoc($resultado);
            $auth = password_verify($password, $usuario["password"]);

            if($auth){
                session_start();
                $_SESSION["usuario"] = $usuario["email"];
                $_SESSION["login"] = true;

                header("Location: /bienesraices/admin");

            }else{
                $errores[] = "El password es incorrecto";
            }

        }else{
            $errores[] = "El usuario no existe";
        }
      

    }

    var_dump($_SESSION);

}

require("includes/funciones.php");
incluirTemplate("header");
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesion</h1>

    <?php foreach ($errores as $error): ?>
         <div class="alerta error"> <?=$error?> </div>
    <?php endforeach;  ?>

    <form  class="formulario" method="POST" novalidate>
        <fieldset>
            <legend>Credenciales</legend>

            <label for="email">E-mail*</label>
            <input type="email" name="email" id="email" placeholder="Tu email" required>

            <label for="password">Contraseña*</label>
            <input type="password" name="password" id="password" placeholder="Tu password" required>

        </fieldset>

        <input type="submit" value="Iniciar sesion" class="boton-verde">

    </form>

</main>



<?php incluirTemplate("footer");  ?>