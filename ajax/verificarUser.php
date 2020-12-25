<?php 
    require "../db/conexion.php";
    $conexion = new ConexionPDO();

    if (!$conexion) {
        
    }else{
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $clave = $_POST['pass'];
        }
        $pdo = $conexion->pdoConexion();
        $sentencia = "select * from usuarios where email = :email";
        $datos = ['email' => $email];
        $resultado = $pdo->prepare($sentencia);
        $resultado->execute($datos);
        $result = $resultado->fetch();
        if(password_verify($clave,$result['pass'])){
            $resultado = ['respuesta',true];
         }else{
            $resultado = ['respuesta',false];
         }
        echo json_encode($resultado);
    }
?>