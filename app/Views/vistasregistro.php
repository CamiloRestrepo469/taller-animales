
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>registro de animales </title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="<?php echo(base_url('public/estilos/usuarios.css')) ?>" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url('public/estilos/signin.css')) ?>" rel="stylesheet">
    
  </head>
  <header>
  <main>
  
  
  
  </main>
  </header>
  
  <body class="text-center">
    <form class="form-signin" method="POST" action="<?php echo(base_url('public/animales/registro')) ?>" enctype="multipart/form-data">
    <a class="btn btn-lg btn-danger btn-block" href="<?php echo(base_url('public/indexani')) ?>">Home</a>
    <br>
    <br>
    <br>
  <img class="mb-4" src="<?php echo(base_url('public/img/animalresg.png')) ?>" alt="animales" width="100" height="72">
  <?php if(session('mensaje')):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo(session('mensaje')) ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <?php endif ?>
  <h1 class="h3 mb-3 font-weight-normal">Por favor, registra tu mascota o fauna</h1>
          <label for="nombre" class="sr-only">Nombre del animal</label>
          <input type="text" id="nombre" class="form-control" placeholder="Nombre del animal" required autofocus name="nombre">
          <label for="edad" class="sr-only">edad</label>
          <input type="numer" id="edad" class="form-control" placeholder="edad del animal" required name="edad">
      <label for="tipo" class="sr-only">tipo mascota o fauna</label>
      <input type="text" id="tipo" class="form-control" placeholder="mascota o fuana " required  name="tipo">
      <label for="descripcion" class="sr-only">Descripcion</label>
      <input type="text" id="descripcion" class="form-control" placeholder="breve descripción" required name="descripcion">
              <label for="comida" class="sr-only">comida</label>
              <input type="text" id="comida" class="form-control" placeholder="clase de comida" required autofocus name="comida">
              <label for="raza" class="sr-only">raza</label>
              <input type="text" id="raza" class="form-control" placeholder="raza del animal" required name="raza">
             
<div class="row mt-3"> <div class="col-12"> <input type="text" class="form-control" placeholder="URL IMAGEN" name="foto"> </div> </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recuérdame
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
  
  
  <a class="btn btn-lg btn-success btn-block" href="<?php echo(base_url('public/animales/listado')) ?>">listado</a>
  <!-- <a class="btn btn-lg btn-success btn-block" href="<?php echo(base_url('public/usuario')) ?>">Registrar usuario</a> -->
  
  <br>
 
  <p class="mt-5 mb-3 text-muted">&copy; kamilo-2020</p>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
