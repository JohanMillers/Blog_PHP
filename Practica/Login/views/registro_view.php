<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
    <title>Regitrate</title>
</head>
<body>
<body>
    <div class="container">
        <div class="row">
            <div class="col ">
                <h1 class="titulo">Registrate</h1>
                <hr class="linea">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">
                    <div class="form-group mt-3">
                    <i class="icono icon-user"></i> <label for="">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="user" placeholder="Ingresa Tu Usuario">
                    </div>
                    <div class="form-group">
                    <i class="icono icon-lock"></i> <label for="">Contraseña</label>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Ingresa Tu Contraseña">
                    </div>
                    <div class="form-group">
                    <i class="icono icon-lock"></i> <label for="">Repetir Consatreña</label>
                        <input type="text" class="form-control" name="pass2" id="pass2" placeholder="Repiter tu Consatreña">
                    </div>
                    <div class="form-group d-flex justify-content-start">
                        
                        <i class="btn btn-success btn-lg " onclick="login.submit()">Enviar</i>

                    </div>

                    <?php if(!empty($errores)): ?>
                          <div class="btn-danger pt2 " style="padding= 20px 5px;" >
                              <ul>
                                  <?php echo $errores; ?>
                              </ul>
                          </div>


                    <?php endif; ?>
                   
                 </form>
                <p class="text mt-3" style="text-align:center;">  
                     ¿Ya tienes cuenta?
                     <br>
                     <a href="login.php">Iniciar Sesion</a>
                </p>
                
            </div>
        </div>
    </div>
    

    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>