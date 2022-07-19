<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Realizar pedido</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="navbar  navbar-light box-shadow" style="background-color: #0c4393;">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" width="130" height="50">
          </a>
        </div>
      </div>
    </header>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Realizar pedidos</h1>
          <p class="lead text-muted">En el siguiente formulario podras realizar un formulario de tus productos</p>
          <p>
            <a href="/pedidos" class="btn btn-primary my-2">Ver pedidos</a>
            <a href="/productos" class="btn btn-secondary my-2">Ver listado de productos</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @if ($alert)    
            <div class="alert alert-success" role="alert">
                Pedido realizado con exito, puedes consultar tu pedido en el boton llamado "ver pedidos" y filtrarlo por el id
              </div>
              @endif

            <form action="{{url('/pedidos')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label for="Nombre">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                </div>

                <div class="form-group">
                  <label for="Fecha">Fecha de nacimiento</label>
                  <input type="date" name="Fecha_nacimiento" class="form-control" placeholder="Ingresa tu nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="direccion">Dirección de envío</label>
                    <input type="text" name="Direccion_envio" class="form-control" placeholder="Ingresa la direccion de envio" required>
                  </div>

                <div class="form-group">
                    <label for="ciudad">ciudad</label>
                    <select name="ciudad" class="custom-select custom-select-lg form-control" required>
                        <option selected>Selecciona la ciudad de envio</option>
                        <option value="Bogota">Bogotá</option>
                        <option value="Medellin">Medellín</option>
                        <option value="Cali">Cali</option>
                        <option value="Tolima">Tolima</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                      </select>
                  </div>
                  
                <div class="form-group">
                    <label for="cedula">Cédula</label>
                    <input  type="file" name="cedula"  accept="application/pdf" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="ciudad">Producto</label>
                    <select name="producto" class="custom-select custom-select-lg form-control" required>
                        <option selected>Selecciona el producto que deseas adquirir</option>
                        @foreach ($prod as $productos)
                        <option value="{{$productos->nombre}}">{{$productos->nombre}}</option>
                          @endforeach
                      </select>
                  </div>

                <button style="margin-top: 1%" type="submit" class="btn btn-primary">Hacer pedido</button>
              </form>

          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>