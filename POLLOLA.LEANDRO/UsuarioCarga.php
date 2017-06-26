<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name=“viewport” content=“width=device-width”>
    </head>
    <body>
        <h1> INGRESO DE DATOS </h1>
           <form id="FormIngreso" action="clases/guardarUsuariotxt.php" method="POST">
            <input type="text" placeholder="Nombre" name="nombUsuario" required/><br>
            <input type="text" placeholder="Correo" name="corrUsuario" required/><br>
            <input type="text" placeholder="Edad" name="edadUsuario"   required/><br>
            <input type="password" placeholder="Clave" name="passUsuario" required/><br>
            <input type="submit" name="entrar" />
        </form>
    </body>
</html>
