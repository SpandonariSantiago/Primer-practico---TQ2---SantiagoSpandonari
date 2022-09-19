<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('../css/Registro.css') }}">
    <title>Registro</title>
</head>
<body>

    <div id="CirculoTopFuera"></div>

    <div id="Barra"></div>

    <a href='/' id="BotonInicio" type="button">B</a>

    <form action="/Registro" method="post">@csrf

        <div id="contenedor">

            <div id="Titulo">Registro de usuario</div>

            <input type="text" class="IngresoDato" name="NombreUsuario" id="NombreUsuario" placeholder="Ingrese su nombre de usuario..." maxlength="20"> 
        
            <input type="text" class="IngresoDato" name="NombreCompleto" id="NombreCompleto" placeholder="Ingrese su nombre completo...">

        
            <input type="Password" class="IngresoDato" name="Password" id="Password" placeholder="Ingrese su contraseña...">

            <div id="BarraSeparadora"></div>
        
            <input type="submit" id="BotonRegistro" value="Registrarse">

            @isset($error)
                @if($error)
                    <div class="Error">
                        <i class="fa fa-warning"></i>
                        <p id="Cuerpo">Error al crear el usuario</p>
                    </div>
                @endif
            @endif

        </div>

    </form>

</body>
</html>