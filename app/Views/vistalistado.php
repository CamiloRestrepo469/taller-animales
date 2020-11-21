<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo(base_url('public/estilos/min.css')) ?>" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    <link href="<?php echo(base_url('public/estilos/blogg.css')) ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url('public/estilos/blog.css')) ?>" rel="stylesheet">

    <title>listado</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="breadcrumb">
  <form class="form-inline" method="POST" action="<?php echo(base_url('public/animales/listado')) ?>" enctype="multipart/form-data">
  <a class="btn btn-lg btn-success btn-" href="<?php echo(base_url('public/indexani')) ?>">Home</a>
  <a class="btn btn-lg btn-info btn-" href="<?php echo(base_url('public/animales')) ?>">Registarse</a>
  </form>
</nav>
<br>
<br>
<br>

    <div class="container">
                        <?php if(session('editado')):?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?php echo(session('editado')) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                          <?php endif ?>
                        <?php if(session('eliminado')):?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo(session('eliminado')) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                          <?php endif ?>
        <div class="row row-cols-1 row-cols-md-3">
       
        <?php foreach($usuarios as $usuario):?>
               <div class="col mb-4">
                    <div class="card h-100">
                      <img src="<?= $usuario["foto"] ?>" class="card-img-top" alt="foto">
                      <div class="card-body">
                        <h5 class="card-title"><?= $usuario["nombre"] ?></h5>
                        <p class="card-text"><?= $usuario["edad"] ?></p>
                        <p class="card-text"><?= $usuario["tipo"] ?></p>
                        <p class="card-text"><?= $usuario["descripcion"] ?></p>
                        <p class="card-text"><?= $usuario["comida"] ?></p>
                        <p class="card-text"><?= $usuario["raza"] ?></p>
                        <a href="<?php echo(base_url("public/animales/eliminar/".$usuario['id'])) ?>" 
                        class="btn btn-danger">Eliminar</a>
                        
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["id"])?>">
                                Editar
                            </button>
                      </div>
                  </div>
                  <div class="modal fade" id="editar<?php echo($usuario["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modificar registro de mascotas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo(base_url("public/animales/editar/".$usuario["id"])) ?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre del animal :</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?= $usuario["nombre"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>edad:</label>
                                            <input type="text" class="form-control" name="edadEditar" value="<?= $usuario["edad"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>tipo:</label>
                                            <input type="text" class="form-control" name="tipoEditar" value="<?= $usuario["tipo"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                                <textarea class="form-control" rows="3" name="descripcionEditar"><?= $usuario["descripcion"]?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>comida:</label>
                                            <input type="text" class="form-control" name="comidaEditar" value="<?= $usuario["comida"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>raza:</label>
                                            <input type="text" class="form-control" name="razaEditar" value="<?= $usuario["raza"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>foto:</label>
                                            <input type="text" class="form-control" name="fotoEditar" value="<?= $usuario["foto"]?>">
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-warning">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

      </div>


        <?php endforeach ?>
                         


        </div>
    
    </div>
    <footer class="blog-footer">
  <p>&copy; kamilo-2020</p>
  <p>
    <a href="<?php echo(base_url('public/indexani')) ?>">Volver arriba</a>
  </p>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>