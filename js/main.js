// Inserccion de fotos  ////

document.addEventListener('DOMContentLoaded', function () {
    const gallery = document.getElementById('gallery');
    const loadImagesButton = document.getElementById('loadImagesButton');

    if (!loadImagesButton) {
        console.error('El botón de carga de imágenes no se encuentra.');
        return;
    }

    // Lista de nombres de archivos de imagen. Ajusta según los archivos en tu carpeta.
    const imageNames = [
        'producto1.jpg',
        'producto2.jpg',
        'producto3.jpg'
    ];

    // Función para cargar imágenes
    function loadImages() {
        // Limpiar el contenido existente en la galería
        gallery.innerHTML = '';

        // Bucle para recorrer la lista de imágenes
        imageNames.forEach(nameImg => {
            // Crear un contenedor para cada imagen
            const imgContainer = document.createElement('div');
            imgContainer.className = 'col-md-4 img-container';

            // Crear el elemento de imagen
            const img = document.createElement('img');
            img.src = `../images/${nameImg}`;  // Ruta de la imagen
            img.alt = nameImg;
            img.className = 'img-fluid';

            // Crear una etiqueta para el nombre de la imagen
            const label = document.createElement('div');
            label.className = 'mt-2';
            label.innerText = nameImg;

            // Añadir la imagen y la etiqueta al contenedor
            imgContainer.appendChild(img);
            imgContainer.appendChild(label);

            // Añadir el contenedor al div de la galería
            gallery.appendChild(imgContainer);
        });
    }

    // Asignar la función al evento de clic del botón
    loadImagesButton.addEventListener('click', loadImages);
});
