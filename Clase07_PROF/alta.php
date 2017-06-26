
<html>

    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="ajax.js"></script>
    </head>

    <body>
<div class="container">
    <div class="row">
         <div class="col-sm-4">
               
        <form action="ValidarUsuario.php" class="form-horizontal" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Alta de registro</legend>
            
                <div class="row">
                    <div class="form-group">
        <input type="text" id="mail" class="form-control" name="mail" placeholder="ingrese mail" value="<?php if(isset($_COOKIE['usuario'])){echo $_COOKIE["usuario"];}?>"/>
                 </div>
                 <div class="form-group">
        <input type="password" id="clave" class="form-control" name="clave" placeholder="ingrese clave" value="333"/>
                </div>


                 <div class="form-group row">
        <input type="button" name="guardar" class="btn btn-lg btn-primary" value="aceptar" onclick="validar()"/>
                 </div>
                  </div>            
        </fieldset> 
      </form>

                <div class="form-group row">
        <input type="button" name="mostrar" class="btn btn-lg btn-primary" value="Mostrar" onclick="Mostrar()"/>
                 </div>
                 <div id="mostrar">

                 </div>
        </div>
    </div>
</div>

    </body>
</html>

