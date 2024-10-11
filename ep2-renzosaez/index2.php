
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Agregar peliculas</title>
    <link rel="stylesheet" href="estilos1.css">
</head>
<body>
<div class="menu">
    <nav class="navbar navbar-expand-md bg-black">
        <div class="container-fluid">
            <a class="navbar-brend" href="index.php">
            <i class="bi bi-camera-reels-fill"></i>
            </a>
             <a class="navbar-brend" href="#">
                <nav class="navbar navbar-expand-lg bg-black">
                    <div class="container-fluid">
                      <a class="navbar-brand text-white" href="#">Mi pagina</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Contacto</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index2.php">Agregar Pelicula</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              
                            </a>
                            <ul class="dropdown-menu text-white"> 
                              <li><a class="dropdown-item" href="#">Numero</a></li>
                              <li><a class="dropdown-item" href="#">Instagram</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Linkdin</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true"></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
        </div>
       </nav>
    </div>
<article>
<form method="post" action="index2.php">
<div class="input-wrapper">
  <input type="text" name="name" placeholder="Titulo">
</div>
<div class="input-wrapper">
  <input type="text" name="calificacion" placeholder="Calificacion">
  <img class="input-icon" src="imagenes/calidad.png" alt="" srcset="" height="30px" width="30px">
</div>
<div class="input-wrapper">
  <input type="text" name="premios" placeholder="Premios">
  <img class="input-icon" src="imagenes/trofeo.png" alt="" srcset="" height="30px" width="30px">
</div>
<div class="input-wrapper">
  <input type="text" name="fecha" placeholder="Fecha de creacion">
  <img class="input-icon" src="imagenes/lienzo.png" alt="" srcset="" height="30px" width="30px">
</div>
<div class="input-wrapper">
  <input type="text" name="duracion" placeholder="Duracion">
  <img class="input-icon" src="imagenes/reloj.png" alt="" srcset="" height="30px" width="30px">
</div>
<div class="input-wrapper">
  <input type="text" name="genero" placeholder="Genero">
  <img class="input-icon" src="imagenes/palomitas-de-maiz.png" alt="" srcset="" height="30px" width="30px">
</div>
<input class="btn" type="submit" name="register" value="Registrar">



</form>
<?php 
include("registrar.php");
?>
</article>

    
</body>
</html>