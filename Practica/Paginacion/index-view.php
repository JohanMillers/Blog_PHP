<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>paginacion</title>
</head>
<body>
    <div class="contenedor">
        <H1>Articulos</H1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo ): ?>
                    <li> <?php echo $articulo['id'] . '.- ' .$articulo['articulo']  ?></li>
                    
                <?php endforeach; ?>
                
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!--Estableciendo cuando el boton anterior esta desatibado-->
                <?php if($pagina == 1): ?>
                  <li class= "disable">&laquo;</li>
                <?php else : ?>
                  <li> <a href="?pagina = <?php echo $pagina -1 ?>">&laquo;</a></li>
                <?php endif; ?> 

                <?php 

                for ($i=1; $i <= $numeroPaginas ; $i++) {
                    if($pagina == $i) {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    }else{
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }

                }

               
                ?>
                 <?php if($pagina == $numeroPaginas): ?>
                  <li class= "disable">&raquo;</li>
                <?php else : ?>
                  <li> <a href="?pagina = <?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?> 
            </ul>
        </section>
    </div>
                
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>