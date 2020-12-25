<?php
public function verificarCuenta($nombreUsuario_Email,$password){
    $conexion = $this->c->conectar();
    $mResult=FALSE;
    $sql = "SELECT usuario, password 
            FROM usuarios
            WHERE
            (usuario = ? or email = ?) LIMIT 1";
    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("ss", $nombreUsuario_Email,$nombreUsuario_Email);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $stmt->bind_result($mUser,$mPassword);
            $stmt->fetch();          
            if (password_verify($password,$mPassword)) {
                $mResult=$mUsuario;
            }else{
                $mResult="No coinciden";
            }
        } else {
            $mResult="No hay filas encontradas";
        }
    } else {
        $mResult="Error en la consulta: ".$conexion->error;
    }
    return $mResult;
}


?>