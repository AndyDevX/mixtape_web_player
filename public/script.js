fetch('public/mixtapes.json')
  .then(response => response.json())
  .then(data => {
    const playlists = data.mixtapes;
    const contenedorPlaylists = document.getElementById('mixtapes');

    // Iterar sobre cada playlist y crear la estructura HTML
    playlists.forEach(playlist => {
      // Crear elementos HTML
      const mixtape = document.createElement('div');
      mixtape.className = 'mixtape';

      const mixtapeImage = document.createElement('div');
      mixtapeImage.className = 'mixtape_image';

      const imagen = document.createElement('img');
      imagen.src = playlist.cover; // Puedes personalizar la imagen según tus necesidades
      imagen.alt = playlist.autor;

      const mixtapeTitle = document.createElement('span');
      mixtapeTitle.className = 'mixtape-title';
      mixtapeTitle.textContent = playlist.name;

      // Adjuntar elementos al árbol DOM
      mixtapeImage.appendChild(imagen);
      mixtape.appendChild(mixtapeImage);
      mixtape.appendChild(mixtapeTitle);

      // Agregar la nueva mixtape al contenedor principal
      contenedorPlaylists.appendChild(mixtape);
    });
  })
  .catch(error => console.error('Error al leer el archivo JSON:', error));
