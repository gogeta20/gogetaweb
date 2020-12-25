<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar Sesion</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/navegacion.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <div class="body">
        <?php require './componentes/header.php'; ?>
    </div>
    <div class="contenedorLogin">
        <!-- formulario Nuevo Usuario -->

        <div class="contenedorFlip">
            <div class="contenedorFlip2" id="caraNew">
                <?php if($errorEmail):?>
                    <div class="errorLogin">Email no valido o ya esta registrado</div>
                <?php endif;?>
                <div class="loginImagencontenedor">
                    <img src="./recursos/imagenes/lock.png" alt="">
                </div>
                <form class="formulario formLogin" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" name='entrar' method="POST">
                    <div>
                        <label for="name">nick: </label>
                        <input class="inputPredeterminado" type="text" name="nickUser" id="nickUser" required pattern="[A-Za-z0-9]{5,40}" value="<?php echo $nick;?>">
                    </div>
                    <div>
                        <label for="name">email: </label>
                        <input class="inputPredeterminado" type="email" name="emailNew" id="email" required>
                    </div>
                    <div>
                        <label for="pass">Contraseña: </label>
                        <input class="inputPredeterminado" type="password" name="claveNew" id="pass" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-z]).*$" value="<?php echo $nick;?>">
                    </div>
                    <div class="botonesLogin">
                        <input class="boton botonSecundario" type="submit" value="Soy nuevo" id="newUser" name="nuevoUser">
                        <input class="boton" type="submit" value="Tengo cuenta" id="oldUser" name="tengoCuenta">
                    </div>
                </form>
                <div class="mensajeFormularioInputs">
                    <p>nick : minimo 5 caracteres letras y numeros</p>
                    <p>contraseña : minimo 8 caracteres letras y numeros</p>
                </div>
            </div>
            <!-- formulario Entrar usuario Old -->
            <div class="contenedorFlip2" id="caraOld">
                <div class="errorLogin oculto" id="errorLogin">Error en los datos</div>
                <div class="loginImagencontenedor">
                    <img src="./recursos/imagenes/open.png" alt="">
                </div>
                <form class="formulario formLogin" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" name='entrar' method="POST" id="formulario2">
                    <div>
                        <label for="name">email: </label>
                        <input class="" type="hidden" name="nombreUserOculto" id="nombreUserOculto" value="">
                        <input class="inputPredeterminado" type="email" name="emailOld" id="email2" required>
                    </div>
                    <div>
                        <label for="pass">Contraseña: </label>
                        <input class="inputPredeterminado" type="password" name="claveOld" id="pass2" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-z]).*$">
                    </div>
                   
                    <div class="botonesLogin">
                        <input class="boton botonSecundario" type="submit" value="Entrar" id="userLogin" name="userLogin">
                        <input class="boton" type="submit" value="Volver" id="volverLogin" name="volverLogin">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php require './componentes/footer.php';?>
<script src="https://kit.fontawesome.com/ca1ebe22a5.js" crossorigin="anonymous"></script>
<script src="./js/login.js"></script>
</html>