<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('../css/Publicacion.css') }}">
    <title>Publicar</title>
</head>

<body>

    <h1 id="TituloP">¡Realiza una publicacion!</h1> 

    <p id="Subtitulo">  
        Bienvenido a la seccion de publicaciónes, donde podras escribir lo que piensas
        para que el resto de los usuarios lo puedan leer.<br><br>

        Algunas aclaraciones antes de empezar, se publicará la fecha y hora de la que se 
        realizó la publicación, no se podrán <br>publicar mas de 255 caracteres y ,por último,
        dicha publicación no podran ser modificadas ni eliminadas.
    </p>

    <div id="CirculoTopFuera"></div>
    
    <div id="Barra"></div>

    <a href='/' id="BotonInicio" type="button">B</a>
    
    <form action="/Publicar" method="post">@csrf

        <div class="Titulos" id="TAutor">Autor:</div>
        <input type="text" name="Autor" id="Autor" value="{{ session('Autor') }}" readonly>

        <div class="Titulos" id="TCuerpo">Aqui escriba lo que quiera publicar: </div>
        <textarea name="Cuerpo" id="Cuerpo" maxlength="255" rows="5" cols="100" placeholder="Escribe aqui tu publicación..."></textarea>

        <input type="submit" class="Botones" id="BotonPublicar" value="Publicar">
        <input type="reset" class="Botones" id="BotonVaciar" value="Vaciar">

    </form>

    @isset($error)
        @if($error)
            <div class="Error">
                <i class="fa fa-warning"></i>
                <p id="CuerpoE">Error al crear la publicación</p>
            </div>
        @endif
    @endif

</body>
</html>