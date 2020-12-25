<?php
	require_once './db/conexion.php';
	$conex = new ConexionPDO();

	$pdo = $conex->pdoConexion(); 
	$sentencia = $pdo->query("select categorias.nombre_cat,post.contenido, post.id_post, post.titulo ,post.descripcion, post.foto, post.creado,usuarios.nombre,categorias.claseFa from usuarios RIGHT join post on post.autor = usuarios.id	join categorias on  categorias.id_cat = post.categoria");
	$resultados = $sentencia->fetchAll();	
	
?>
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
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/articulos.css">
	<link rel="stylesheet" href="css/footer.css">
</head>
<body>
	<!--  navegacion  -------------->
	<div class="body">
		<?php require './componentes/header.php'?>
	</div>
	<!--  slider  ----------------->
	<div class="slider">
		<div class="titularSlider">
			<div>
				<h2>Gogeta Code</h2>
				<p>documentación y ejemplos de:</p>
				<div class="lengProg">
					<i class="fab fa-html5 moverHtml"></i>
					<i class="fab fa-css3 moverCss"></i>
					<i class="fab fa-react moverReact"></i>
					<i class="fab fa-node-js moverNode"></i>
					<i class="fab fa-js moverJs"></i>
					<i class="fas fa-database moverMysql"></i>
					<i class="fab fa-php moverPhp"></i>
				</div>
			</div>
		</div>
		<div class="imagenSlider">
			<img src="./recursos/imagenes/bebida-energetica.png">
		</div>
	</div>
	<!--  articulos  -------------->
	<h3 class="tituloArticulos">Articulos</h3>
	<div class="contenedorPosts">
		<?php 
			foreach($resultados as $item):
		?>
			<article class="post <?php echo $item['nombre_cat'];?>">
				<div class="head">
					<h2><?php echo $item['titulo'];?></h2>
				</div>
				<div class="logo">
					<i class="<?php echo $item['claseFa'];?>"></i>
				</div>
				<div class="author">
					<span>categoria: <?php echo $item['nombre_cat'];?></span>
					<span><?php echo $item['creado'];?></span>
					<span>Autor : <?php echo $item['nombre']?></span>
				</div>
				<div class="cont">
					<p><?php echo $item['descripcion']?></p>
				</div>
				<a class="buttonVerMas" href="single.php?id=<?php echo $item['id_post']?>">leer mas</a>
			</article>
		<?php 
			endforeach;
		?>
	</div>
	
	<?php
        require './componentes/footer.php';
    ?>
</body>
<script src="https://kit.fontawesome.com/ca1ebe22a5.js" crossorigin="anonymous"></script>
</html>