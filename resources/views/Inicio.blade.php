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

    <hr><h3>Si desea iniciar sesion presione aqui:</h3><a href='/Login'>Iniciar sesion</a><hr>
    <h3>Si desea Registrarse presione aqui:</h3><a href='/Registro'>Registrarse</a><hr>

    <h3>Publicaciones</h3><hr>

    @foreach($Publicaciones as $Publicacion)
            
            <b>Autor:</b> {{ $Publicacion -> Autor }} 
            <b>&nbsp;&nbsp;Fecha de publicacion:</b>{{ $Publicacion -> updated_at }}<br />
            <b>&nbsp;&nbsp;Publicacin: </b> {{ $Publicacion -> Cuerpo }}<hr>
    
    @endforeach
</body>
</html>