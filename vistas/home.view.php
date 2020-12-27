<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar Sesion</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/navegacion.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <div class="body">
		<?php require './componentes/header.php'?>
	</div>
    <div class="homeBody">
        <h2>home<?= $_SESSION['user']; ?></h2>
    
    </div>
    <?php
        require './componentes/footer.php';
    ?>
</body>
<script src="https://kit.fontawesome.com/ca1ebe22a5.js" crossorigin="anonymous"></script>
</html>