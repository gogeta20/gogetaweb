<header>
    <div class="contentHeader">
        <div class="logo">
            <a href="index.php" class="gogetaLogo">Gogeta</a>
        </div>

        <nav class="navegacion">
            <div class="barra">
                <a class="botonBuscar" id="" ><i class="fas fa-search"></i></a>
                <div class="divBuscar">
                    <input class="inputPredeterminado" type="text" id="buscar" placeholder="buscar...."/>
                </div>
            </div>
            <div class="enlacesNav1">
                <ul class="enlacesNav">
                    <a>blog</a>
                    <a>noticias</a>
                    <a href="login.php"><?php echo  isset($_SESSION['user']) ? "Mi cuenta": "Login";?></a>
                </ul>
            </div>
            
        </nav>
    </div>
</header>