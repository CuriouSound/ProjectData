<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erro World Sound</title>
    <link rel="shortcut icon" type="image/svg" href="Images/logoicon.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    
</head>

<header>
<img src="images/banner.png" class="img-fluid" alt="Responsive image">
</header>

<body>
<section class="container">
  <div class="row justify-content-center">
    <div class="card col-md-4">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>
    <div class="card col-md-4 offset-md-1 ">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
</div>
</section>

<section class="container">
    <div class="row">
        <p class="col-md-12">Le top des playlists écoutées (dans le pays où l'utilisateur se trouve)</p>
    </div>
</section>

<section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div id="plans" class="carousel">
        <div class="carousel__container">
          <div class="car__item">
            <h1>9</h1>
            <p>Basic plan</p>
          </div>
          <div class="car__item">
            <h1>49</h1>
            <p>Medium plan</p>
          </div>
          <div class="car__item">
            <h1>99</h1>
            <p>Business plan</p>
          </div>
          <div class="car__item">
            <h1>149</h1>
            <p>Master plan</p>
          </div>
        </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="carousel__container">
          <div class="car__item">
            <h1>9</h1>
            <p>Basic plan</p>
          </div>
          <div class="car__item">
            <h1>49</h1>
            <p>Medium plan</p>
          </div>
          <div class="car__item">
            <h1>99</h1>
            <p>Business plan</p>
          </div>
          <div class="car__item">
            <h1>149</h1>
            <p>Master plan</p>
          </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="carousel__container">
          <div class="car__item">
            <h1>9</h1>
            <p>Basic plan</p>
          </div>
          <div class="car__item">
            <h1>49</h1>
            <p>Medium plan</p>
          </div>
          <div class="car__item">
            <h1>99</h1>
            <p>Business plan</p>
          </div>
          <div class="car__item">
            <h1>149</h1>
            <p>Master plan</p>
          </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</section>





<script src="script.js"></script>


<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
<footer>

</footer>
</html>





<?php

// //Si on a une info dans $_GET['page'], c'est la page demandée
// if(isset($_GET['page']) && !empty($_GET['page'])) {
//     $page = $_GET['page'];
// }
// else {
//     $page = 'Home'; //Si il n'y a rien dans $_GET['page'], on va sur la home
// }

// $page = ucfirst($page); //On passe la première lettre en majuscule car les controlleurs s'appellent FilmController.php et HomeController.php mais les URLs sont en général en minuscule

// //On inclut le controller en fonction de la page demandée
// if (is_file('Controllers/'.$page.'Controller.php')){
//     include ('Controllers/'.$page.'Controller.php');  
// } 
// else {
//      include ('404.php');  
// }

?>

