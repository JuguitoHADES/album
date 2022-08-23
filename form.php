<html lang="en" data-arp-injected="true">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <link rel="icon" href="img/perrai.png" sizes="16x16" type="image/png">
  <title>Album Animals</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <style id="dark-reader-style" type="text/css">
    @media screen {}
  </style>
</head>

<body cz-shortcut-listen="true">

  <header>
    <div class="collapse bg-secondary" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white ">About</h4>
            <p class="fs-6 fw-bolder text-light">animal es un ser vivo que puede moverse por sus propios medios. Por lo general, dentro de la denominación se incluye a los integrantes del reino conocido como Animalia. Existen diversas características compartidas por la mayoría de los animales, aún con sus diferencias.</p>
          </div>

        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="index.php" class="navbar-brand d-flex align-items-center">



          <strong>Album</strong>
        </a>
        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main class="col-6 row justify-content-center ">

    <form class=" w-25 p-3 h-25 position-absolute top-25 start-50 translate-middle-x " action="index.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3 ">
        <label class="form-label fw-bold fs-4 text-center">Registrate para no perderte informacion del mundo animal</label>
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nosotros nunca compartiremos sus datos</div>
      </div>

      <div class="mb-3">
        <label for="exampleInputfoto" class="form-label">Foto para su perfil</label>
        <input type="file" name="archivo" accept=".jpg, .png, .jpeg" class="form-control" id="exampleInputfoto">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Verificar</label>
      </div>
      <button type="button" class="btn btn-primary position-absolute  start-50 translate-middle-x" data-bs-toggle="modal" data-bs-target="#exampleModal">
        enviar
      </button>

    </form>

  </main>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Felicidades</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Te has registrado correctamente
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
          <a type="button" class="btn btn-primary" href="index.php">Ir a la pagina principal</a>
        </div>
      </div>
    </div>
  </div>


  <footer class="text-muted py-5 position-absolute bottom-0 start-50 translate-middle-x">
    <div class="container">
      <bottom class="btn float-end btn-primary">
        <a>Back to top</a>
      </bottom>
      <p class="mb-1">Album example is © Bootstrap, </p>
      <p class="mb-0"><a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>


  <script src="dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>