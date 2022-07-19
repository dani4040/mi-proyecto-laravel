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
    <title>Pedidos de productos</title>

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
          <h1 class="jumbotron-heading">Pedidos Manantial</h1>
          <p class="lead text-muted">Acá podras encontrar todos nuestros productos</p>
          <p>
            <a href="/pedidos/create" class="btn btn-primary my-2">Realizar pedido</a>
            <a href="/productos" class="btn btn-secondary my-2">Ver listado de productos</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <table class="table">
                <form >
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Ingresa el id de tu pedido" aria-label="Search">
                    <button style="margin-top: 1% !important" class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                  </form>

                <thead style="margin-top: 2% !important">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Dirección de envío</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cédula</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pedi as $pedidos)
                  <tr>
                    <th scope="row">{{$pedidos->id}}</th>
                    <td>{{$pedidos->nombre}}</td>
                    <td>{{$pedidos->Fecha_nacimiento}}</td>
                    <td>{{$pedidos->Direccion_envio}}</td>
                    <td>{{$pedidos->ciudad}}</td>
                    <td>{{$pedidos->producto}}</td>
                    <td><a href="{{ asset('storage').'/'.$pedidos->cedula }}" download="cedula.pdf"><img src="https://cdn-icons-png.flaticon.com/512/724/724933.png" width="20" height="20"></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

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