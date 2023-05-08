<?php

include('../php/conexion.php');

//guardar datos en la base de datos
if(isset($_POST['btnn'])) {
    if(strlen($_POST['mail']) >= 1 && strlen($_POST['password']) >= 1) {
        $email = trim($_POST['mail']);
        $password = trim($_POST['password']);
        $fecha_reg = date("d / m / y");
        $consulta = "INSERT INTO ingreso(Correo, Contraseña, Fecha_reg) VALUES ('$email','$password','$fecha_reg')";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado) {
            ?>
                <div class="alert alert-success" role="alert">
                    Datos enviados!
                </div>
            <?php
        }
        else {
            ?>
                <div class="alert alert-warning" role="alert">
                    Hubo un problema al enviar los datos!
                </div>
            <?php
        }
    }
    else {
        ?>
        <div class="alert alert-danger" role="alert">
            ¡Por favor rellene todos los campos!
        </div>
        <?php
    }
}

?>