<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación Responsive</title>
    <link rel="stylesheet" href="../css/estilos_nav.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <img src="../images/logoFinal.jpg" alt="" class="logo">
            <a class="navbar-brand ms-3 fs-3" href="../index.php" target="_parent" rel="noopenner noreferrer">
                <h1 class="yellow fs-3">Monkey Shop</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 nav-ul">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html" target="_parent">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./productos.php" target="_parent">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./nosotros.php" target="_parent">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contacto.php" target="_parent">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>
</html>