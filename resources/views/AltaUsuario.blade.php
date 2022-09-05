<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>REGISTRO DE USUARIO</h1> 
    <hr><h2>Ingrese los datos del usuario</h2><hr>
    
    <br /> 
    <form action="/Registro" method="post">@csrf
        <label for="NombreUsuario">Nombre de Usuario: </label>
        <input type="text" name="NombreUsuario" id="NombreUsuario"> 
        <label>(Tenga en cuenta que con este nombre lo veran los demas usuarios)</label><br /><br /> 

        <label for="NombreCompleto">Nombre completo: </label>
        <input type="text" name="NombreCompleto" id="NombreCompleto"><br /><br />

        <label for="Password">Contraseña: </label>
        <input type="Password" name="Password" id="Password"><br /><br />

        <input type="submit" value="Crear Usuario">
        <input type="reset" value="Vaciar">
    </form>
    <br /><hr>
    
    <a href='/'>Volver</a><br />
</body>
</html>