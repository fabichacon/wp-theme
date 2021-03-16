<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='style.css' rel="stylesheet" >

    <title>Bootstrap for WordPress - Fabi Chacon</title>
    <?php wp_head(); ?>
  </head>
  <body>

    <!-- begin Menu Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">LOGO</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Sobre Nosotros</a>
                <a class="nav-link" href="#">Blog</a>
                <a class="nav-link" href="#">Contacto</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- end Menu Navbar -->

      <!-- begin Blog -->
      <div class="container">

        <h2 class="my-5 text-center">Titulo Blog</h2>
        <hr>

        <!-- begin Row -->
        <div class="row">
            
            <!-- begin Entradas -->
            <div class="col-lg-9">
                <!-- begin Entrada individual -->
                <div class="card-body">
                    <h2>
                      <a href="single.html">Título de la entrada</a>
                    </h2>
                    <p class="small mb-0">Fecha: 12/03/2021</p>
                    <p class="small mb-0">Autor: fabichacon</p>
                    <p class="small">Categorías: <a href="">Categoría1</a>  / <a href="">Categoría2</a>  Etiquetas: <a href="">Etiqueta1</a>  / <a href="">Etiqueta2</a> </p>
                    <img src="img/1200.jpg" alt="" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora minima architecto eveniet quae nulla iure, itaque dicta voluptate asperiores reiciendis laboriosam veniam repellendus doloremque at aliquid et, sequi ad blanditiis!</p>
                    <a href="single.html" class="btn btn-primary">Más info...</a>
                </div>
                <!-- end Entrada Individual -->

                <!-- begin Entrada individual -->
                <div class="card-body">
                    <h2>
                      <a href="single.html">Título de la entrada</a>
                    </h2>
                    <p class="small mb-0">Fecha: 12/03/2021</p>
                    <p class="small mb-0">Autor: fabichacon</p>
                    <p class="small">Categorías: <a href="">Categoría1</a>  / <a href="">Categoría2</a>  Etiquetas: <a href="">Etiqueta1</a>  / <a href="">Etiqueta2</a> </p>
                    <img src="img/1200.jpg" alt="" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora minima architecto eveniet quae nulla iure, itaque dicta voluptate asperiores reiciendis laboriosam veniam repellendus doloremque at aliquid et, sequi ad blanditiis!</p>
                    <a href="single.html" class="btn btn-primary">Más info...</a>
                </div>
                <!-- end Entrada Individual -->

                <!-- begin Paginación -->
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                        </ul>
                      </nav>
                </div>
                <!-- end Paginación -->


            </div>
            <!-- end Entradas -->


            <!-- begin Aside -->
            <div class="col-lg-3">
                <div class="card-body">
                    <h5 class="text-secondary">Publicidad</h5>
                    <hr>
                    <img src="img/vertical.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <!-- end Aside -->
        </div>
        <!-- end Row -->
      </div>
      <!-- end Blog -->

      <footer class="container-fluid py-4 text-center text-light bg-dark">
          <h5>Lorem ipsum dolor sit.</h5>



      </footer>

    <?php wp_footer(); ?>
  </body>
</html>