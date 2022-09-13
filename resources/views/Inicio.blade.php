<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>BLOG</h1><hr>
    <h2>Bienvenido a nuestro blog, donde podra publicar lo que usted quiera ☺</h2>

    @if(session('Login'))

    <hr>
        <form action="/" method="post">@csrf
        
            <label for="NombreUsuario">Bienvenido: </label>
            <input type="text" name="NombreUsuario" id="NombreUsuario" value="{{ session('Autor') }}" readonly><br /><br />

            <label>Si desea cerrar sesion presione aqui: </label>
            <input type="submit" value="Cerrar Sesión">
        </form>

    <hr><h3>Si desea hacer una publicacion presione aqui:</h3><a href='/Publicar'><input type="button" value="Publicar"></a><hr>
        
    @else    

        <hr><h3>Si desea iniciar sesion presione aqui:</h3><a href='/Login'><input type="button" value="Iniciar sesion"></a><hr>
        <h3>Si desea Registrarse presione aqui:</h3><a href='/Registro'><input type="button" value="Registrarse"></a><hr>

    @endif

    <h3>Publicaciones</h3><hr>

    @isset($Publicaciones)
        @foreach($Publicaciones as $Publicacion)
                
                <b>Autor:</b> {{ $Publicacion -> Autor }} 
                <b>&nbsp;&nbsp;Fecha de publicacion:</b>{{ $Publicacion -> updated_at }}<br />
                <b>&nbsp;&nbsp;Publicacin: </b> {{ $Publicacion -> Cuerpo }}<hr>
        
        @endforeach
    @endif

</body>
</html>