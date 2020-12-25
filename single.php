<?php
	require_once './db/conexion.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conex = new ConexionPDO();
        if($conex){
            $pdo = $conex->pdoConexion(); 
            $sentencia = $pdo->query("select categorias.nombre_cat,post.contenido, post.id_post, post.titulo ,post.descripcion, post.foto, post.creado,usuarios.nombre,categorias.claseFa from usuarios RIGHT join post on post.autor = usuarios.id	join categorias on  categorias.id_cat = post.categoria where id_post = $id");
            $resultados = $sentencia->fetchAll();	
        }
    }


    require './vistas/single.view.php';
?>
