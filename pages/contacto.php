<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos_Contacto.css">
    <title>Contacto </title>
</head>
<header>
    <iframe class="iframe_nav" src="./nav.php" frameborder="0"></iframe>    
</header>
<body>
    
    <div class="flexContainer">
        <div class="container">
            <h1>Contacto</h1>
            <div class="contact-info">
                <h2>Redes Sociales</h2>
                <div class="social-media">
                    <a href="https://www.facebook.com/share/5PviBWh8uY6amRZE/?mibextid=qi2Omg" target="_blank">Facebook</a>
                    <a href="https://www.instagram.com/keylin_ciprian?igsh=aWk2d3hncXdsODQ1" target="_blank">Instagram</a>
                </div>
                <h2>Teléfono</h2>
                <p>(849) 639-2464</p>
            </div>
            <div class="comments-section">
                <h2>Deja tu Comentario</h2>
                <form id="commentForm">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comentario:</label>
                        <textarea id="comment" name="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
                <div class="comments-grid">
                    <!-- Aquí se mostrarán los comentarios enviados -->
                </div>
            </div>
        </div>
        <script src="../js/scripts.js"></script>

    </div>
    <footer>
        <iframe class="iframe_footer" src="footer.php" frameborder="0"></iframe>
    </footer>
</body>

</html>