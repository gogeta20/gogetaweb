<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gogeta | codigo y diseño</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Kulim+Park&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/navegacion.css">
	<link rel="stylesheet" href="css/articulos.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/single.css">
</head>
<body>
    <div class="body">
        <?php require './componentes/header.php'?>
    </div>
    <?php 
        foreach($resultados as $item):
            ?>
        <h2 class="tituloSingle"><?php echo $item['titulo'];?></h2>
        <div class="contenedorPosts">
            <article class="post postSingle <?php echo $item['nombre_cat'];?>">
                <div class="logo">
                    <i class="<?php echo $item['claseFa'];?>"></i>
                </div>
                <div class="author">
                    <span>categoria: <?php echo $item['nombre_cat'];?></span>
                    <span><?php echo $item['creado'];?></span>
                </div>
                <div class="cont">
                    <p><?php echo $data = str_replace("\n","<br/>", $item['contenido']); ?></p>
                </div>
                <span>Autor : <?php echo $item['nombre']?></span>
                <!-- <a class="buttonVerMas" href="single.php?id=<?php $item['id_post']?>">leer mas</a> -->
            </article>
        </div>
    <?php 
        endforeach;
    ?>
    <div class="codigoFrame">
        <iframe height="800px" width="100%" src="https://repl.it/@gogeta20/php-uno?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
    </div>
    <?php
        require './componentes/footer.php';
    ?>
</body>
<script src="https://kit.fontawesome.com/ca1ebe22a5.js" crossorigin="anonymous"></script>
</html>