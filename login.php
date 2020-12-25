<?php 
session_start();
require './db/conexion.php';
$conexion = new ConexionPDO();
$login = false;
if(!$conexion){
    header('Location: index.php');
}

if(isset($_POST['emailOld'])){
    header('Location: home.php');
}

if(isset($_POST['nuevoUser'])){
    $nombre = $_POST['nickUser'];
    $email = $_POST['emailNew'];
    $cifrado = $_POST['claveNew'];
    $cifrado = password_hash($cifrado,PASSWORD_DEFAULT);

    $datos = [
        'nombre' => $nombre,
        'email' => $email,
        'cifrado' => $cifrado
    ];

    $pdo = $conexion->pdoConexion();

    $sentencia = "insert into usuarios (nombre,email,pass) values (:nombre,:email,:cifrado)";
    $resultado = $pdo->prepare($sentencia)->execute($datos);

    ($resultado) ? var_dump($resultado): var_dump($resultado);
}

require './vistas/login.view.php';
?>