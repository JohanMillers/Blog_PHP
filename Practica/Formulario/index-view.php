<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <div class="container">
      <div class="row mt-3">
        <div class="col">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
            <div class="form-group">
            <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" value="<?php if(!$enviados && isset($nombre)) echo $nombre ?>">
            </div>
            <div class="form-group">
            <label for="Correo">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo" placeholder="" value="<?php if(!$enviados && isset($correo)) echo $correo ?>">
            </div>
            <div class="form-group">
                <textarea name="mensaje"  class="form-control" id="mensaje" placeholder="Mensaje"><?php if(!$enviados && isset($mensaje)) echo $mensaje ?></textarea>
            </div>
            <?php if(!empty($errores)): ?>
            <div class="alert btn-danger">
              <?php echo $errores; ?>
            </div>
            <?php elseif($enviados): ?>
            <div class="alert btn-success">
              <p>Enviados Correctamente</p>
            </div> 
            <?php endif ?>
            
            <div class="form-group d-flex justify-content-center mt-3">
                <input type="submit" class="btn btn-primary" name="submit" value="Enviar Correo">
            </div>
            

            </form>
        </div>
      </div>
    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  </body>
</html>