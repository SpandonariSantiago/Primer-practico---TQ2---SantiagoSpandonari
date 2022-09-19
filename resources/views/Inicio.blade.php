<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('../css/Inicio.css') }}">
    <title>Blog</title>
</head>

<body>

    @if(session('Login'))

        <form action="/" method="post">@csrf
        
            <div id="SesionAutor">¡Bienvenido {{ session('Autor') }}!</div>

            <input type="submit" id="BotonCerrarSesion" class="BotonesBarra" value="Cerrar Sesión">
        </form>

        <a href='/Publicar' id="BotonPublicar" class="BotonesBarra">Publicar</a>

    @else    

        <div id="CirculoTopFuera"></div>
        <a href='/' id="BotonInicio" type="button">B</a>

        <a href='/Login' id="BotonInicioSesion" class="BotonesBarra">Iniciar Sesion</a>
        <a href='/Registro' id="BotonRegistro" class="BotonesBarra">Registrarse</a>

        
        <div class="Aviso">
            <i class="fa fa-warning"></i>
            <p id="CuerpoA">Para crear una pubicacion inicia sesion</p>
        </div>
        
    @endif

    <div id="CirculoGrande">
        <div id="CirculoChico">
           
            <div id="Titulo">Bienvenidos a BLOG MARK 2</div>

            <p id="Cuerpo" >Creado por Santiago Spandonari en 2022, 
                este blog está orientado a aquellas personas 
                que necesiten de un espacio para poder expresarse sin prejuicios.<br>
                
                <br>Aqui podras publicar cuanto quieras de manera anonima. 
                Comienza cuando quieras! Inicia sesion para publicar algo 
                o solo echa un vistazo de lo que los otros usuarios tienen 
                para decir.</p>

            <div id="TituloP">Publicaciones</div>

            @isset($Publicaciones)
                <textarea id="Comentarios" readonly>
                    @foreach($Publicaciones as $Publicacion)
--| {{ $Publicacion -> updated_at }} |--

&nbsp;| Autor | -> {{ $Publicacion -> Autor }}
&nbsp;| Cuerpo| -> {{ $Publicacion -> Cuerpo }}         

                    @endforeach
                </textarea>
            @endif
        </div>
    </div>

    <div id="CirculoTopFuera"></div>
    <a href='/' id="BotonInicio" type="button">B</a>

</body>
</html>