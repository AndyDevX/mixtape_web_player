<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web MixTape player</title>
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <?php
            include("static/styles.html");
        ?>
        <link rel="shortcut icon" href="assets/img/cinta.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <div class="container-fluid">

        <div id="navbar">
            <div class="dropdown">
                <!--Archivo-->
                <button class="btn btn-secondary btn-sm dropdown-toggle" style="--bs-btn-font-size: .75rem; --bs-btn-bg: #1b222c; --bs-btn-border-color: transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    File
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Nueva playlist</a></li>
                    <li><a class="dropdown-item" href="#">Nueva carpeta de playlist</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sesión privada</a></li>
                    <li><a class="dropdown-item" href="#">Modo Offline</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Salir</a></li>
                </ul>
                <!--Editar-->
                <button class="btn btn-secondary btn-sm dropdown-toggle" style="--bs-btn-font-size: .75rem; --bs-btn-bg: #1b222c; --bs-btn-border-color: transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Edit
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Deshacer</a></li>
                    <li><a class="dropdown-item" href="#">Rehacer</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Cortar</a></li>
                    <li><a class="dropdown-item" href="#">Copiar</a></li>
                    <li><a class="dropdown-item" href="#">Pegar</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Seleccionar todo</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Buscar</a></li>
                    <li><a class="dropdown-item" href="#">Filtrar</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Preferencias</a></li>
                </ul>
                <!--Vista-->
                <button class="btn btn-secondary btn-sm dropdown-toggle" style="--bs-btn-font-size: .75rem; --bs-btn-bg: #1b222c; --bs-btn-border-color: transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    View
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Acercar</a></li>
                    <li><a class="dropdown-item" href="#">Alejar</a></li>
                    <li><a class="dropdown-item" href="#">Reestablecer zoom</a></li>
                </ul>
                <!--Reproducción-->
                <button class="btn btn-secondary btn-sm dropdown-toggle" style="--bs-btn-font-size: .75rem; --bs-btn-bg: #1b222c; --bs-btn-border-color: transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Play
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Deshacer</a></li>
                    <li><a class="dropdown-item" href="#">Rehacer</a></li>
                </ul>
                <!--Ayuda-->
                <button class="btn btn-secondary btn-sm dropdown-toggle" style="--bs-btn-font-size: .75rem; --bs-btn-bg: #1b222c; --bs-btn-border-color: transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Help
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Deshacer</a></li>
                    <li><a class="dropdown-item" href="#">Rehacer</a></li>
                </ul>
            </div>
        </div>

        <div id="mixtapes">
            <p style="position: sticky; top: 0; background-color: #1b222c; text-align: center; padding: 10px 0px; z-index: 1; box-shadow: white 10px ;">Mixtapes</p>
        </div>

        <div id="cassette">
            <p id="mixtape-view-name">Synth</p>
            <p id="song-title"> Smalltown boy</p>
            <i style="position: absolute; z-index: 1; margin-top: 16.5rem; color: #DF3889; font-size: x-large" class="fa-solid fa-music"></i>

            <div id="tape-background">
                <img id="background-image" src="assets/img/vaporwave.jpg" alt="vaporwave">
            </div>

            <img id="tape" src="assets/img/Cassette.svg" alt="mixtape">
        </div>

        <div id="player_panel">
            <div id="player_buttons">
                <i class="fa-solid fa-shuffle"></i>
                <i class="fa-solid fa-backward-step"></i>
                <i class="fa-solid fa-circle-pause"></i>    <i class="fa-solid fa-circle-play" hidden></i>
                <i class="fa-solid fa-forward-step"></i>
                <i class="fa-solid fa-repeat"></i>
            </div>
            <div id="player_progress">
                0:00 <progress id="progress" max="100" value="70"></progress> 2:52
            </div>
        </div>
        
        <div id="community">
            Community section (Rating and comments)
            <div style="background-color: #12151C; width: 96%; height: 9.5rem; margin: 0 auto; overflow: hidden scroll;">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> Andy: Ta bueno</p>
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> Sami: Ta muy bueno</p>
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> WeyRandom: No ta tan bueno</p>
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> Bot-128: Aña</p>
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> Tilin: Apoco si</p>
                <p><i class="fa-solid fa-star"></i> Que: so</p>
            </div>
        </div>

        <div>
            Prueba
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="public/script.js"></script>
</html>
<!-- Comentario-->
