<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
</head>
<body>
    <h1>REALIZAR PUBLICACION</h1> 
    <hr><h2>Ingrese en el siguiente cuadro lo que quiera que se publique en el blog.</h2>
    <h3>(Cabe aclarar que a la hora de realizar la publicacion su nombre de usuario y la fecha
        de publicacion será visible para el resto de usuarios)</h3><hr>
    
    <br /> 
    <form action="/Publicar" method="post">@csrf

        <label for="Autor">Autor:</label><br />
        <input type="text" name="Autor" id="Autor"><br /><br />

        <label for="Cuerpo">Aqui escriba lo que quiera publicar: </label><br />
        <textarea name="Cuerpo" id="Cuerpo" placeholder="Escribe en tu post"></textarea><br /><br />

        <input type="submit" value="Publicar">
        <input type="reset" value="Vaciar">
    </form>
    <hr>
    
    <br /><a href='/'>Volver</a><br />

</body>
</html>