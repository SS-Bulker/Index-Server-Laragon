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
<html lang="en">
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="phpmyadmin">PHPMyAdmin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Important Project
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="SmartPrice">SmartPrice</a>
          <a class="dropdown-item" href="Ecommerce">Ecommerce</a>
          <a class="dropdown-item" href="plataforma-aprendizaje-php-mysql-poo-mvc">Academia</a>
          <div class="dropdown-divider"></div>
          <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Create Project </button>
        </div>
        <li class="nav-item active">
          <a class="nav-link" href="#">Notes <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Console <span class="sr-only">(current)</span></a>
        </li>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Server</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="?action=ok">
  <div class="form-group">
    <label for="exampleInputEmail1">Name Project</label>
    <input type="text" class="form-control" name="nameProject" id="InputName" aria-describedby="nameHelp" required>
    <small id="nameHelp" class="form-text text-muted">this will be the name of the project folder.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description Project</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mark as important project</label>
  </div>
  <input type="submit" name="submitCreat" class="btn btn-primary" value="Create">
</form>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_GET['action'])){
  if($_GET['action'] == "ok"){
    if(isset($_POST['nameProject'])){
      mkdir($_POST['nameProject']);
      echo '<div class="alert alert-success" role="alert">
            Project successfully created!
            </div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">
            Error creating project!
            </div>';
    }
    echo '<script>
    setTimeout(function(){
      window.location = ("/");
    }, 3000);
    </script>';
  }
}
?>

<!-- INFO APPS AND SERVER -->
<div class="container">
<div class="card text-center mt-5">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <div class="nav-link active">Info</div>
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

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">

    <h5 class="card-title">CRUD-PHP-MYSQL-POO-MVC</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="crud-php-mysql-poo-mvc" class="card-link">Ir link</a>
  </div>
</div>

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">WordPress</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="wordpress" class="card-link">Ir link</a>
  </div>
</div>

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">APP-COMPLETA-PHP-MYSQL-POO</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="app-completa-php-mysql-poo" class="card-link">Ir link</a>
  </div>
</div>

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">LOGIN-PHP-MYSQL-POO</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="login-php-mysql-poo" class="card-link">Ir link</a>
  </div>
</div>

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">INFORMATIVA-PHP-MVC</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="informativa-php-mvc" class="card-link">Ir link</a>
  </div>
</div>

<div class="card ml-5 mt-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">PLATAFORMA-APRENDIZAJE-PHP-MYSQL-POO-MVC</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="plataforma-aprendizaje-php-mysql-poo-mvc" class="card-link">Ir link</a>
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
                <h5 class="mb-1">Created by <a href="https://github.com/SS-Bulker">SS Bulker</a></h5>
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
