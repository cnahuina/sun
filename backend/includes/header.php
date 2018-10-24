<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend Dashboard Suntime</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <img width="50" alt="Angular Logo" src="http://www.centaurosperu.com/images/portfolio/suntime.png">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Suntime Store</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Desconectarse</a>
        </li>
      </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        <i class="fa fa-home"></i>
                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-product-hunt"></i>
                        Productos
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="post.php">
                    <i class="fa fa-edit"></i>
                        Publicaciones
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="slides.php">
                    <i class="fa fa-edit"></i>
                        Slides
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa fa-edit"></i>
                        Botones
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="fa fa-edit"></i>
                        Secciones
                    </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Utilidades</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
