<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>INICIO DE SESION</h1><hr>
    
    <br />
    <form action="/Login" method="post">@csrf
        
        <label for="NombreUsuario">Nombre de Usuario: </label>
        <input type="text" name="NombreUsuario" id="NombreUsuario"><br /><br />

        <label for="Password">Contraseña: </label>
        <input type="Password" name="Password" id="Password"><br /><br />

        <input type="submit" value="Iniciar Sesión">
    </form>
    <br /><hr>

    <a href="/Registro"><input type="button" value="Crear usuario"></a>

    <br /><hr>
    
    <a href='/'><input type="button" value="Volver"></a>

    @isset($error)
        @if($error)
            <br /><hr>
            <div style="color: red;">Error al iniciar sesion</div>
        @endif
    @endif
    
</body>
</html>