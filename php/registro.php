<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/formulario/css/style.css">  
    <link rel="stylesheet" href="http://localhost/formulario/css/skills_bar.fill_variations.css">
    <title>Registrarse</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/f39a4936aa.js" crossorigin="anonymous"></script>
    <div class="form-container">
        <form method="POST">
            <div class="form-title">
                <h1>Registrarse</h1>
            </div>
            <div class="input-container">
                <label class="text-label" for="#mail">
                    <span>Correo</span>
                    <input type="text" class="text-input" id="mail" name="mail">
                </label>
                <div class="passwords grid-2">
                    <label class="text-label" for="#password">
                        <span>Contraseña</span>
                        <input type="password" class="text-input" id="password" name="password">
                    </label>
                    <label class="text-label" for="#confirm-password">
                        <span>Confirmar contraseña</span>
                        <input type="password" class="text-input" id="confirm-password" name="confirm-password">
                        <i class="fa-solid fa-eye" onclick="showPassword()"></i>
                    </label>
                </div>
            </div>
            <div class="grid-2 invisible"  id="strength-password">
                <div class="strength-password">
                    <div class="strength" id="strength-password-bar"></div>
                    <p id="strength-password-text" class="strength-text"></p>
                </div>
                <div class="samePassword">
                    <p id="same-password-text" class="strength-text"></p>
                </div>  
            </div>
            <br>
            <p class="switch-login-register">¿Ya tienes una cuenta? Inicia sesión <a href="index.php">aquí.</a></p>
            <div class="btn-container">
                <button class="btnn" name="btnn">Enviar</button>
            </div>
        </form>
    </div>
    <?php
    include("../php/datos.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="http://localhost/formulario/js/main.js"></script>
</body>

</html>