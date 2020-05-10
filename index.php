<?php
if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
        case 'info':
        phpinfo(); 
        exit;
    break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!-- HEADER   -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">Laragon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="phpmyadmin">PhpMyAdmin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projects
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="SmartPrice">SmartPrice</a>
          <a class="dropdown-item" href="Ecommerce">Ecommerce</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Created Projects</a>
        </div>
      </li>
        <a class="nav-link" >Console</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Server</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- INFO APPS AND SERVER -->
<div class="container">
<div class="card text-center mt-5">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://laragon.org/">Link</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h1 class="card-title">Laragon</h1>
    <p class="card-text"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br /></p>
    <a href="https://laragon.org/docs" class="btn btn-primary">Getting Started</a>
  </div>
</div>
</div>

<!-- PROJECTS -->
<div class="container mt-5 ml-auto">
<h2 class="ml-3">Projects</h2>
<div class="row">

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Smart Price</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="SmartPrice" class="card-link">Ir link</a>
  </div>
</div>

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Ecommerce</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="Ecommerce" class="card-link">Ir link</a>
  </div>
</div>



</div>
</div>

<!-- FOOTER -->
<div class="container mt-4">
    <footer class="page-footer font-small unique-color-dark pt-4">
        <!-- Footer Elements -->
        <div class="container">
            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
            <center>
                <h5 class="mb-1">Created by SS Bulker</h5>
            </center>
            </li>
            </ul>
            <!-- Call to action -->
        </div>
        <!-- Footer Elements -->
    </footer>

</div>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>