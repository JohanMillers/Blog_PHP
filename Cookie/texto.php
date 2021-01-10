<?php 

if(isset($_COOKIE['font-size'])){    // si la variable $_cookie esta setiada osesa si tiene valores me va a ejecutar font-size de lo contraio sera 15px
    $tamano = htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamano = '15px';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>texto</title>
    <style>
        p{
            font-size: <?php echo $tamano; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur reiciendis aliquam corporis. Ex, id necessitatibus quo nam saepe sequi explicabo porro sed optio. Facilis cum ex unde obcaecati doloremque modi.</p>

</body>
</html>