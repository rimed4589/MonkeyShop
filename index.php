<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Monkey Shop </title>
</head>

<body>
    <!--========================================================== -->
    <!--                     BARRA DE NAVEGACION                   -->
    <!--========================================================== -->
    <header>
        <iframe class="iframe_nav" src="./pages/nav.php" frameborder="0"></iframe>
    </header>


    <!--========================================================== -->
    <!--                     SLIDER IMAGENES                       -->
    <!--========================================================== -->
    <h1 class="pb-3 mb-3 fs-2 text-center">Bienvenido a Monkey Shop</h1>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="./images/slider/slider1.jpg" class="d-block w-100" alt="slide1">

            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="./images/slider/slide2.jpg" class="d-block w-100" alt="slide2">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="./images/slider/slider3.jpg" class="d-block w-100" alt="slide3">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--========================================================== -->
    <!--                   SECCION PRINCIPAL HERO                  -->
    <!--========================================================== -->
    <section class="seccion-hero w-100 mt-3 mb-4 pb-5">

        <div class="container-fluid">
            <div class="row seccion-hero container-fluid">
                <div class="col-lg-6   container-fluid col-productos p-5 ">
                    <h2 class=" text-center pt-5">Productos para Barbería</h2>
                    <p class="pt-5">
                    <h3 class="titulo">En <b>Monkey Shop</b>, ofrecemos una selección premium de productos para el
                        cuidado personal y barbería: </h3><br><br>
                    <ul class="fs-5">
                        <li>Máquinas de Afeitar: Precisión y durabilidad en cada uso.</li>
                        <li>Kits Personales: Todo lo esencial para tu rutina de cuidado.</li>
                        <li>Gillettes: Navajas para un afeitado suave y cómodo.</li>
                        <li>Crema de Afeitar: Fórmulas cremosas para un afeitado sin irritaciones.</li>
                        <li>Alcohol: Desinfecta y cuida tu piel post-afeitado.</li>
                    </ul>
                    <h3 class="titulo mt-5"><b>Compra y Asesoría:</b></h3><br>

                    <p class="fs-5">Visita nuestra tienda para encontrar productos de calidad que mejoren tu rutina de
                        cuidado.
                        <br> Para cualquier consulta, estamos aquí para ayudarte.
                    </p>

                    </p>

                </div>
                <div class="col-lg-6  container-fluid collage-productos p-5 text-center">
                    <img src="./images/collage.jpg" alt="collage" class="w-75 img-fluid">
                </div>
            </div>
        </div>

        <a href="./pages/productos.php" class="container-btn-hero" rel="noopenner noreferrer">
            <button type="button" class="btn btn-primary">
                Ver Mas
                <i class="bi bi-arrow-right-circle-fill"></i>
            </button>
        </a>


    </section>


    
    <!--========================================================== -->
    <!--                   PIE DE PAGINA                           -->
    <!--========================================================== -->
    <footer>
        <iframe src="./pages/footer.php" frameborder="0" class="pie-pagina"></iframe>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>