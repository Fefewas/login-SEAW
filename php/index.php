<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>log in</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/f39a4936aa.js" crossorigin="anonymous"></script>
    <div class="form-container">
        <form class="form-login">
            <div class="form-title">
                <h1>LOG IN</h1>
            </div>
            <div class="input-container">
                <label class="text-label" for="#correo">
                    <span>Correo</span>
                    <input type="text" class="text-input" id="correo">
                </label>
                <div class="contraseñas">
                    <div class="contraseña-container">
                        <label class="text-label" for="#contraseña">
                            <span>Contraseña</span>
                            <input type="password" class="text-input">
                            <i class="fa-solid fa-eye-slash"d></i>
                        </label>
                    </div>
                    <div class="contraseña-container ">
                        <label class="text-label" for="#contraseña">
                            <span>Confirmar contraseña</span>
                            <input type="password" class="text-input">
                            <i class="fa-solid fa-eye-slash"></i>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <p class="cambio-login-register">¿Aún no tienes una cuenta? Registrate <a href="register.html">aquí</a></p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Recordar contraseña
                </label>
            </div>
            <button class="btnn">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>