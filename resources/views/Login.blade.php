<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('../css/Login.css') }}">
    <title>Login</title>
</head>
<body>

    <div class="BarrasExteriores" id="BarraArriba"></div>
    <div class="BarrasExteriores" id="BarraAbajo"></div>

    <div id="CirculoTopFuera"></div>
    <a href='/' id="BotonInicio" type="button">B</a>
    <div class="contenedor"></div>

    <form action="/Login" method="post">@csrf
        
        <div class="Logos" id="LogoNombreUsuario">
            <div id="ImagenNU"></div>
        </div>
        <div class="Logos" id="LogoPassword">
            <div id="ImagenP"></div>
        </div>

        <input class="IngresoDato" type="text" name="NombreUsuario" id="NombreUsuario" placeholder="Ingrese su nombre de usuario...">

        <input class="IngresoDato" type="Password" name="Password" id="Password" placeholder="Ingrese su contraseña...">

        <input id="BotonInicioSesion" type="submit" value="Iniciar Sesión">

        <a href='/Registro' id="BotonRegistro">¿No tienes cuenta? Presiona aqui para crearla</a>
    </form>

    @isset($error)
            @if($error)
                    <div class="Error">
                        <i class="fa fa-warning"></i>
                        <p id="Cuerpo">Error al iniciar sesion</p>
                    </div>
            @endif
        @endif
    
</body>
</html>