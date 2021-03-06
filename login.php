<?php 

session_start();
if (isset($_SESSION['user'])) { // session que esta en vigencia
    header('Location: home.php');
}
require './db/conexion.php';
$conexion = new ConexionPDO();
$errorEmail = false;
$nick = "";
$pass = "";
$emailUser = "";

if(!$conexion){
    header('Location: index.php');
}


if(isset($_COOKIE['logeado'])){ // cookie al crear cuenta nuevo usuario
    $emailUser = $_COOKIE['logeado'];
}


if(isset($_POST['emailOld'])){ // de formulario de usuario con cuenta
    $_SESSION['user'] = $_POST['nombreUserOculto'];
    header('Location: home.php');
}


if(isset($_POST['nuevoUser'])){ // de nuevo usuario
    
    if(filter_var( $_POST["emailNew"] , FILTER_VALIDATE_EMAIL)){
        $nombre = $_POST['nickUser'];
		$email = $_POST["emailNew"];
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
        if($resultado){
            $_SESSION['user'] = $nombre;
            setcookie('logeado',$email,time()+60*60*60);
            header('Location: home.php');
        }else{
            $errorEmail = true;
        }

        $nick = $_POST['nickUser'];
        $pass = $_POST['claveNew'];
    }else{
        $nick = $_POST['nickUser'];
        $pass = $_POST['claveNew'];
		$errorEmail = true;
	}

}

require './vistas/login.view.php';
?>