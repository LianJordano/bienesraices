<?php 

    require "includes/config/database.php";
    $db = conectarDB();

    $email = "correo@correo.com";
    $password ="123456";

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $consulta = "INSERT INTO usuarios (email,password) VALUES ('$email', '$passwordHash')";

    $respuesta = mysqli_query($db,$consulta);

    if($respuesta){
        echo 1;
    }

?>