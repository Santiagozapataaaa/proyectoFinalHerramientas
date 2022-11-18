<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/login.css">
    <title>Login</title>
</head>
<body>
    <h2>INICIO DE SESIÓN</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Crear cuenta</h1>
                <input type="text" placeholder="Nombre" />
                <input type="number" placeholder="cedula" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button class="buttonIngresar">Registrarme</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Inicia Sesión</h1>
                <input type="email" placeholder="Usuario" />
                <input type="password" placeholder="Contraseña" />
                <a href="#" class="forgot">Olvidaste tu contraseña?</a>
                <button class="buttonIngresar">Ingresar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Para mantenerte conectado con nosotros debes de loguearte con tus datos  personales</p>
                    <button class="ghost" id="signIn">Ya tengo cuenta</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola!!!</h1>
                    <p>Aun no estas registrado? registrate dando click en el boton de aqui abajo</p>
                    <button class="ghost" id="signUp">Registrarme</button>
                </div>
            </div>
        </div>
    </div>

    <script> 
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>

</html>